<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Autenticador
{

    //PARA USAR ESSA CLASSE COMO MIDDLEWARE
        /*
         * Definir ela como middleware nas rotas web
         * Definir um nome pra ela dentro de Kernel.php (routeMiddleware)
         * PAra usar ela como rota universal -> Usar um caminho em kernel -> protected midleware
         */

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->is('entrar', 'registrar') && !Auth::check()) {
            return view('entrar.index');
        }
        return $next($request);
    }
}
