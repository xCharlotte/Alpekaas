<?php

use Illuminate\Http\Request;
use App\User;
use App\Card;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Card as CardResource;
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

Route::get('/users', function () {
    return UserResource::collection(User::all());
});

Route::get('/cards', function () {
  return CardResource::collection(Card::all());
});
