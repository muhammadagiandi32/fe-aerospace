<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Token;

class VerifyToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            //code...
            $cookie = request()->cookie('X-AUTH-TOKEN');
            $token = new Token($cookie);
            JWTAuth::decode($token);
        } catch (\Throwable $th) {
            // throw $th;
            return redirect()->route('/');
        }
        return $next($request);
    }
}
