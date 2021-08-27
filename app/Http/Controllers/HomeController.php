<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $mensagem = $request
            ->session()->get('mensagem');

        //return view('home.welcome',
        return view('home',
            compact(
                'mensagem') //          'courses' => $courses, 'mensagem'= $mensagem ...
        );
    }
}
