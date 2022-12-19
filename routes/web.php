<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use resources\views\auth;

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

// Route::get('/', function () {
//     return view('webpages.index');
// });
// Route::get('/gellery', function () {
//     return view('webpages.gellery');
// });
// Route::get('/blog', function () {
//     return view('webpages.blog');
// });
// Route::get('/about', function () {
//     return view('webpages.about');
// });
// Route::get('/policy', function () {
//     return view('webpages.policy');
// });
// Route::get('/form', function () {
//     return view('webpages.form');
// });
// Route::get('/table', function () {
//     return view('webpages.table');
// });


Route::get('/',[StudentController::class,'homepage']);
Route::get('/table',[StudentController::class,'table']);
Route::get('/addstudentform',[StudentController::class,'addstudentform']);
Route::get('/editstudentform/{id}',[StudentController::class,'editstudentform']);
Route::post('/update/{id}',[StudentController::class,'update']);
Route::post('/store', [StudentController::class,'store']);


auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
