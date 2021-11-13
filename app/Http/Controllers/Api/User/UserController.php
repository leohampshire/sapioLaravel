<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use function Sodium\add;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return response($users);
//            ->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('__token');

        /*$data2 = ['name' => 'admin',
                'email' => 'scholar.sapio.test@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('sapio123'),
                'user_type_id' => '1',
                'remember_token' => Str::random(10),
                'current_team_id' => '1'];*/

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $data['password'] = Hash::make($data['password']);
        $data['remember_token'] = Str::random(10);
        array_push($data, ['remember_token' => Str::random(10)]);

        //TODO: Criar lógica de email de verificação;
        $data['email_verified_at'] = now();

        //TODO: adicionar time

        return response(
            User::query()->create(
                $data
            )
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
