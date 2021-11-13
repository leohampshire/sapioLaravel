<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Firebase\JWT\JWT;
use http\Header;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed'
        ]);

        $fields = $request->except('__token');

        $fields['password'] = Hash::make($fields['password']);

        //TODO -> variação de tipo de usuário
        $fields['user_type_id'] = 1;

        $user = User::query()->create($fields);

        //TODO - criar tipo de usuário
        $token = $user->createToken('token', [getenv('STUDENT_ACCESS'), getenv('EMAIL_UNVERIFIED')])->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();

        return response([
            'message' => 'Logget out'
        ]);
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        //Check email
        $user = User::query()->where('email', $fields['email'])->first();

        //TODO - montar middleware para verificar se o email foi confirmado
//        if ($user->tokenCan('email:unverified')){
//            return response(['message'=>'Email não verificado!'], 405);
//        }

        //Check Password
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return response([
                'message' => 'Bad creds'
            ], 401);
//            throw new \Exception("Bad Creds", 400);
        }

        //deleta tokens existentes
//        $user->tokens()->delete();

//        $token = $user->createToken('token_test', ['access:dashboard'])->plainTextToken;
        $jwtToken = $this->generateJwtUserToken($user);

        $response = [
            'user' => $user,
//            'token' => $token,
            'accessToken' => $jwtToken
        ];

        return response($response, 200)
            ->header(
                'accessToken',  $jwtToken
            );
    }

    /**
     * @param User $user
     * @return string
     */
    public function generateJwtUserToken(User $user)
    {
//        $payload = [
//            'id' => $user->id,
//            'name'=> $user->name,
//            'email' => $user->email
//        ];

        return JWT::encode($user, getenv( 'JWT_KEY'), 'HS256');

//        return [
//            'x-access-token' => JWT::encode($user, $pass)
//        ];
    }
}
