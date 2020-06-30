<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class FilterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        // Consulta no Banco de dados.

        $user = DB::table('api_datas')
            ->where('name', $request->key)
            ->get();


        // Verificação se o ID existe no banco
        // Ou se a requisição deve ser Negada.
        
        if($user->isEmpty()) {
            return response()->json([
                'Status' => 400,
                'Message' => 'Chave não encontrada. Requisição negada.' 
            ]);
        }

        return $next($request);
        
    }
}