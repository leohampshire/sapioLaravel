<?php

namespace App\Http\Controllers\Api\Course;

use App\Exceptions\Course\CourseUpdateException;
use App\Helper\Course\CourseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CoursesFormRequest;
use App\Models\Course\Course;
use App\Models\Product\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    private $courseHelper;

    public function __construct()
    {
        $this->courseHelper = new CourseHelper();

        //$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(
            Course::all(),
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoursesFormRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $course = $this->courseHelper->create($request, Auth::user());

        return response(
            $course
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response(
            Course::query()->find($id)
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $course = $this->courseHelper->update($request, $id, Auth::user());
        }catch (CourseUpdateException $exception){
            report($exception);

            return response([
                "Error" => $exception->getMessage(),
                "Code" => $exception->getCode(),
                "Message" => "Erro atualizando o curso",
            ], 500);
        }

        return response(
            $course
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = $this->courseHelper->destroy($id, Auth::user());

        return $response;
    }

    public function search($name)
    {
        return $this->courseHelper->searchByName($name);
    }
}
