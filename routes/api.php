<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function() {
    return [
        'status' => 'success',
        'message' => 'Testing api route'
    ];
});

Route::get('/testDatabase', function() {
    App\User::create([
        'email' => uniqid() . '@example.com',
        'name' => 'Test User',
        'password' => 'secret'
    ]);

    return response()->json(App\User::all());
});