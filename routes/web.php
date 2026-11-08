<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\QuizController;
Route::get('/quiz3',[QuizController::class,'show']);

Route::get('/quiz4',[QuizController::class,'quiz4_show']);

Route::get('/quiz5',[QuizController::class,'login']);

Route::get('/quiz6_main',function(){
    return view('common.main');
});

Route::get('/quiz7',[QuizController::class,'quiz7_show']);

Route::get('/quiz6',[QuizController::class,'quiz6_show'])->name('quiz6_test');


// quiz7の画面を表示するためのルーティング //
Route::get('/quiz7', [QuizController::class, 'quiz7_show']);

Route::get('/quiz8',[QuizController::class,'quiz8_redirect']);

Route::get('/quiz9/{id}',[QuizController::class,'quiz9_show'])->name('quiz9_test');

Route::POST('/quiz9/{id}',[QuizController::class,'quiz9_show']);

Route::get('/quiz10',[QuizController::class,'quiz10_show']);
Route::POST('/quiz10/store',[QuizController::class,'quiz10_store']);

//quiz11/allで表示//
Route::get('/quiz11/all',[QuizController::class,'quiz11_show_all']);

Route::get('/quiz11/get',[QuizController::class,'quiz11_show_get']);

Route::get('/quiz12/{id}',[QuizController::class,'quiz12_show'])->name('quiz12_test');

Route::POST('/quiz12/update/{id}',[QuizController::class,'quiz12_update'])->name('quiz12_test');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home',
[App\Http\Controllers\HomeController::Class,
'index'])->name('home');

Route::get('/tasks',
[App\Http\Controllers\TaskController::class,
'index']);

Route::post('/create', 
[App\Http\Controllers\TaskController::class, 
'create']);

Route::delete('/delete/{taskId}', [App\Http\Controllers\TaskController::class, 'delete']);