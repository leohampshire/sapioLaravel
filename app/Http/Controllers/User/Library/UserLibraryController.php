<?php

namespace App\Http\Controllers\User\Library;

use App\Http\Controllers\Controller;
use App\Models\User\Library\UserLibrary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLibraryController extends Controller
{
    public function index(Request $request)
    {
        $userLibraries = UserLibrary::query()
            ->get()
            ->where('user_id', null, Auth::user()->id)
            ->sortBy('name');

        $mensagem = $request
            ->session()->get('mensagem');

        return view('user.libraries.index',
            compact(
                'userLibraries',
                'mensagem') //          'userLibraries' => $userLibraries, 'mensagem'= $mensagem ...
        );
    }

    public function create()
    {
        return view('courses.create');
    }
}
