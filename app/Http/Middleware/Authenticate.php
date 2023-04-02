<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\JsonResponse;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function unauthenticated($request, array $guards)
    // {
    //     if (!auth()->check()) {
    //         return new JsonResponse(['error' => 'Não autenticado'], 401);
    //     }
        // if (! $request->expectsJson())
        //     return response()->json(['message' => 'Autenticação é necessária'], 401);
    // }
}
