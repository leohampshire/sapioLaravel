<?php


namespace App\Helper\Course;


use App\Http\Requests\Course\CoursesFormRequest;
use App\Models\Course\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
}
