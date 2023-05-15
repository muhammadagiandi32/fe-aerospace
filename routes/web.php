<?php

use App\Helpers\base_url;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\member\AddMemberController;
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

Route::get('/', [AuthController::class, 'index'])->name('/');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('verify');

Route::post('/login', function (Request $request) {
    try {
        //code...
        $payload = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $response = Http::withHeaders([
            'X-API-Key' => 'qV32ZZ90fGaUqF0p6CcmyU452tL7H4LCjzggxmbsBap11VLY0r6EzMb6k0p8NOGM',
            'accept' => 'application/json'
        ])->withBody(json_encode($payload), 'application/json')->post(base_url::url('auth/login'));

        Cookie::queue('X-AUTH-TOKEN', $response->object()->access_token, $response->object()->expires_in);
    } catch (\Throwable $th) {
        return $response->json();
        //throw $th;
    }
    // return $response;
    return redirect()->route('dashboard');
})->name('login');


Route::get('/me', function (Request $request) {
    $payload = [
        'email' => $request->email,
        'password' => $request->password
    ];
    $response = Http::withHeaders([
        'X-API-Key' => 'qV32ZZ90fGaUqF0p6CcmyU452tL7H4LCjzggxmbsBap11VLY0r6EzMb6k0p8NOGM',
        'accept' => 'application/json',
        'Authorization' => 'Bearer ' . request()->cookie('X-AUTH-TOKEN')
    ])->withBody(json_encode($payload), 'application/json')->post(base_url::url('auth/me'));

    // return response()->json($response);
    return $response;
    // return redirect()->route('dashboard');
})->name('me')->middleware('verify');

Route::post('/logout', function (Request $request) {
    // return response()->json($response);
    if (is_null(request()->cookie('X-AUTH-TOKEN'))) {
        return redirect()->route('/');
    } else {
        $response = Http::withHeaders([
            'X-API-Key' => 'qV32ZZ90fGaUqF0p6CcmyU452tL7H4LCjzggxmbsBap11VLY0r6EzMb6k0p8NOGM',
            'accept' => 'application/json',
            'Authorization' => 'Bearer ' . request()->cookie('X-AUTH-TOKEN')
        ])->post(base_url::url('auth/logout'));
        Cookie::queue(Cookie::forget('X-AUTH-TOKEN'));
    }
    return redirect()->route('/');
})->name('logout')->middleware('verify');


Route::get('/test', function () {

    $promise = Http::get(base_url::url('test'));
    return $promise[0]['children'][0]['data']['Username'];
});

Route::get('/form', function () {
    return view('pages.form.form-kepuasan');
});
Route::post('/post-form', function (Request $request) {
    $response = Http::withHeaders([
        'X-API-Key' => 'qV32ZZ90fGaUqF0p6CcmyU452tL7H4LCjzggxmbsBap11VLY0r6EzMb6k0p8NOGM',
        'accept' => 'application/json',
        // 'Authorization' => 'Bearer ' . request()->cookie('X-AUTH-TOKEN')
    ])->withBody(json_encode($request), 'application/json')->post(base_url::url('form-kepuasan'));
    return $response;
})->name('post-form');

// Route::get('/add-member', [AddMemberController::class, 'index'])->name('add-new-member');
Route::name('member.')->group(function () {
    Route::get('/add-member', [AddMemberController::class, 'index'])->name('add-new-member');
});
