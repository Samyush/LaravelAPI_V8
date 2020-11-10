<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//uae Illuminate\Http\Resources\Json\JsonResource;

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

Route::get('/login', function (){
//    return "hello";
})->name('polls');

Route::get('polls', [\App\Http\Controllers\PollsController::class, 'index']);
Route::get('polls/{id}', [\App\Http\Controllers\PollsController::class, 'show']);
Route::post('store', [\App\Http\Controllers\PollsController::class, 'store']);
Route::put('polls/{poll}', [\App\Http\Controllers\PollsController::class, 'update']);
Route::delete('polls/{poll}', [\App\Http\Controllers\PollsController::class, 'delete']);
Route::any('errors', [\App\Http\Controllers\PollsController::class, 'errors']);
//Route::apiResource('questions', [\App\Http\Controllers\QuestionController::class,]);
Route::get('polls/{poll}/questions', [\App\Http\Controllers\PollsController::class, 'questions']);

Route::get('files/get', [\App\Http\Controllers\FilesController::class, 'show'] );

Route::post('files/create', [\App\Http\Controllers\FilesController::class, 'create']);
