<?php

use App\Helpers\base_url;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Cookie;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'index']);
Route::post('/login', function(Request $request){
    $payload = [
        'email'=>$request->email,
        'password'=>$request->password
    ];
    $response = Http::withHeaders([
        'X-API-Key' => 'qV32ZZ90fGaUqF0p6CcmyU452tL7H4LCjzggxmbsBap11VLY0r6EzMb6k0p8NOGM',
        'accept' => 'application/json'
    ])->withBody(json_encode($payload), 'application/json')->post(base_url::url('auth/login'));

    // return response()->json($response);
    Cookie::queue('X-AUTH-TOKEN', $response->object()->access_token, $response->object()->expires_in);

    return $response;
})->name('login');


Route::get('/me', function(Request $request){
    $payload = [
        'email'=>$request->email,
        'password'=>$request->password
    ];
    $response = Http::withHeaders([
        'X-API-Key' => 'qV32ZZ90fGaUqF0p6CcmyU452tL7H4LCjzggxmbsBap11VLY0r6EzMb6k0p8NOGM',
        'accept' => 'application/json',
        'Authorization' => 'Bearer ' . request()->cookie('X-AUTH-TOKEN')
    ])->withBody(json_encode($payload), 'application/json')->post(base_url::url('auth/me'));

    // return response()->json($response);
    return $response->json();
})->name('me');