<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\studentController;

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

Route::get('/', function () {
    return view('backend.dashboard');
})->name('dashboard');

Route::group(['prefix'=>'student'],function(){
    Route::get('/manage',[studentController::class,'index'])->name('student.manage');
    Route::post('/store',[studentController::class,'store']);
    Route::get('/show',[studentController::class,'show']);
    Route::get('/destroy/{id}',[studentController::class,'destroy']);
    Route::get('/status/{id}',[studentController::class,'status']);
    Route::get('/get/{id}',[studentController::class,'get']);
    Route::post('/update/{id}',[studentController::class,'update']);
});