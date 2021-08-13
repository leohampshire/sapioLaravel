<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistroControler extends Controller
{
    public function create()
    {
        return view('registro.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('__token');
        $data['password'] = Hash::make($data['password']);
        $user = User::query()->create($data);

        Auth::login($user);
        return view('series.index');
    }
}
