<?php

namespace App\Http\Controllers\Course;

use App\Helper\Course\CourseHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CoursesFormRequest;
use App\Models\Course\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    private $courseHelper;

    public function __construct()
    {
        $this->courseHelper = new CourseHelper();

        //$this->middleware('auth');
    }

    public function index(Request $request)
    {
        $courses = Course::query()
            ->get()
            ->where('user_id', null, Auth::user()->id)
            ->sortBy('nome');

        $mensagem = $request
            ->session()->get('mensagem');

        return view('courses.index',
            compact(
                'courses',
                'mensagem') //          'courses' => $courses, 'mensagem'= $mensagem ...
        );
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(CoursesFormRequest $request)
    {

        $course = $this->courseHelper->create($request, Auth::user());

        $request->session()
            ->flash(   //put (manda pra sessao e nao sai da sessao, flash dura uma sessao)
                'mensagem',
                "Série {$course->nome} criada com sucesso!");

        //$this->sendMail($course, $request);

        return redirect()
            ->route('courses.index');
    }

    public function destroy(Request $request)
    {

        $courseName =  $this->courseHelper->destroy($request->id);

        $request->session()
            ->flash(   //put (manda pra sessao e nao sai da sessao, flash dura uma sessao)
                'mensagem',
                "Série $courseName removida com sucesso!");

        return redirect()
            ->route('courses.index');
    }

    public function editaNome(int $id , Request $request)
    {
        $novoNome = $request->nome;
        $course = Course::query()->find($id);
        $course->nome = $novoNome;
        $course->save();
    }

    /**
     * @param Course $course
     * @param CoursesFormRequest $request
     */
    public function sendMail(Course $course, CoursesFormRequest $request): string
    {
        //$order = Order::findOrFail($request->order_id);

        /**
         * Criando um Evento
         */
        $event = new NovaCourseEvent(
            $course
        );
        event($event);

        /**
         * Listener criado a partir de EventService
         */



        return 'Email Enviado!';
    }


}
