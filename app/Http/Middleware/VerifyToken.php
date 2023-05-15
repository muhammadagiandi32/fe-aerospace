<?php

namespace App\Http\Middleware;

use App\Helpers\base_url;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
        $cookie = request()->cookie('X-AUTH-TOKEN');

        if (!empty($cookie)) {
            // return redirect()->route('logout');
            Http::withHeaders([
                'X-API-Key' => 'qV32ZZ90fGaUqF0p6CcmyU452tL7H4LCjzggxmbsBap11VLY0r6EzMb6k0p8NOGM',
                'accept' => 'application/json',
                'Authorization' => 'Bearer ' . request()->cookie('X-AUTH-TOKEN')
            ])->post(base_url::url('auth/logout'));
        } else {
            try {
                //code...
                $token = new Token($cookie);
                JWTAuth::decode($token);
            } catch (\Throwable $th) {
                // throw $th;
                return redirect()->route('/');
            }
        }
        return $next($request);
    }
}
