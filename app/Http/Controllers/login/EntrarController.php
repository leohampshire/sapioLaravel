<?php


namespace App\Http\Controllers\login;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntrarController extends Controller
{
    public function index()
    {
        return view('entrar.index');
    }

    public function entrar(Request $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()
                ->back()
                ->withErrors('Usuário e/ou senha incorretos');
        }else {
            return redirect()->route('series.index');
        }
    }
}
