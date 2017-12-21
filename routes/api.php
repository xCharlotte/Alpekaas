<?php

use Illuminate\Http\Request;
use App\User;
use App\Card;
use App\SafetyValue;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Card as CardResource;
use App\Http\Resources\SafetyValue as SafetyValueResource;
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
  $card = Card::find(1);
  return new CardResource($card);
});

Route::get('/safetyvalues', 'SafetyValueController@index');
Route::get('/safetyvalues/{id}', 'SafetyValueController@show');

// Route::get('/safetyvalues', function () {
//   return SafetyValueResource::collection(SafetyValue::all());
//   // $safetyValue = SafetyValue::all();
//   // return new SafetyValueResource($safetyValue);
// });
