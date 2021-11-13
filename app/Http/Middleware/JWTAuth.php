<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;
use function Symfony\Component\Translation\t;

class JWTAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //VALIDAÇÃO DO ACESSO VIA JWT
        $this->auth($request);

        return $next($request);
    }

    /**
     * @param Request $request
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    private function getJWTAuthUser(Request $request)
    {
        $headers = $request->header();

        //TOKEN PURO EM JWT
        $jwt =(isset($headers['authorization']) ? str_replace('Bearer',
            '',
            $headers['authorization'])
            : '')[0];

//        echo "<pre>";
//        print_r($jwt);
////        print_r($headers);
//        print_r(getenv('JWT_KEY'));
//        echo "</pre>"; exit;

        $key = getenv('JWT_KEY');

        //DECODE
        $decode = (array)JWT::decode($jwt, new Key($key, 'HS256'));
        $email = $decode['email'] ?? '';

        return User::all()->where('email', $email);
    }

    private function auth(Request $request)
    {
        if ($obUser = $this->getJWTAuthUser($request)){
            $request->user = $obUser;
            return true;
        }
        throw new Exception("Acesso Negado", 403);
    }

}
