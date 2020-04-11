<?php

use Illuminate\Http\Request;
// use App\User;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\User;

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
    return $response = $client->request('GET', '/api/user?api_token='.$token);
});

Route::post('article', 'ApiRegisterController@store');

// Route::get('missions', 'ApiController@show');



