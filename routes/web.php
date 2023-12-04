<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\PracticseMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/profile/{id}', [ProfileController::class, 'index']);

Route::get('/user-agent', function(Request $request){
    // Retrieve the 'User-Agent' header from the request
    $userAgent = $request->header('User-Agent');

    // Return the $userAgent in the response
    return $userAgent;
});

Route::get('/test',[ProfileController::class,'test']);
Route::get('/test1',[ProfileController::class,'test1'])->middleware('test');
Route::get('/test2',[ProfileController::class,'test2'])->middleware('test');
Route::get('/test3/{id}',[ProfileController::class,'test3'])->middleware('test');
