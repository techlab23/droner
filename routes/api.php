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

 
Route::group(['middleware' => 'api'], function() {
    Route::get('drones', function() {
        return App\Drone::latest()->orderBy('created_at', 'desc')->get();
    });
 
    Route::get('drone/{id}', function($id) {
        return App\Drone::findOrFail($id);
    });
 
    Route::post('drone/store', function(Request $request) {
        return App\Drone::create(['body' => $request->input(['body'])]);
    });
 
    Route::patch('drone/{id}', function(Request $request, $id) {
        App\Drone::findOrFail($id)->update(['body' => $request->input(['body'])]);
    });
 
    Route::delete('drone/{id}', function($id) {
        return App\Drone::destroy($id);
    });
});