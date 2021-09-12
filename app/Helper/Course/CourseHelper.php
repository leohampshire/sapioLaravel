<?php


namespace App\Helper\Course;


use App\Exceptions\Course\CourseUpdateException;
use App\Http\Requests\Course\CoursesFormRequest;
use App\Models\Course\Course;
use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;
use phpDocumentor\Reflection\Types\Context;

class CourseHelper
{
    public function create(CoursesFormRequest $request, $user): Course
    {
        DB::beginTransaction();
        $course = Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'user_id' => $user->id,
        ]);
        DB::commit();

        return $course;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Model
     * @throws CourseUpdateException
     */
    public function update(Request $request, $id, $user): Model
    {
        DB::beginTransaction();
        $course = Course::query()->find($id);
        if ($course->user_id != $user->id){
            //TODO: Create new exception
            throw new CourseUpdateException("Invalid User");
        }

        $course->update($request->all());
        DB::commit();

        return $course;
    }

    public function searchByName($name)
    {
        $course = Course::query()->where('name', 'like', '%'.$name.'%')->get();

        return $course;
    }

    public function destroy($id, $user)
    {
        try {
            $course = Course::query()->findOrFail($id);
        }catch (\Exception $e) {
            return response([
                'message' => 'Course not Found'
            ]);
        }

        DB::beginTransaction();
        if ($course->user_id != $user->id){
            //TODO: Create new exception
            throw new CourseUpdateException("Invalid User");
        }

        //TODO: Lógica para destruir capitulos e cia
        $return = Course::destroy($id);

        DB::commit();

        return response([
            'message' => 'Course Destroyed',
            'course' => $course,
        ]);
    }
}
