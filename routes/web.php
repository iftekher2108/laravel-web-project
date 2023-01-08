<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\teacher;
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

// pages route link start here 
Route::get('/',[PageController::class,'homepage']);
Route::get('/gellery',[PageController::class,'gellery']);
Route::get('/blog',[PageController::class,'blog']);
Route::get('/about',[PageController::class,'about']);
Route::get('/policy',[PageController::class,'policy']);
Route::get('/table',[PageController::class,'table']);
Route::get('/studentprofile/{id}',[PageController::class,'studentprofile']);
Route::get('/teacher-profile/{id}', [PageController::class, 'teacherprofile']);





// pages route link end here



// teacher data management start here


// teacher data management end here







Auth::routes();








// dashboard section start here
Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
Route:: get('/accountsetting',[HomeController::class,'accountsetting'])->name('accountsetting');
// dashboard section end here


// student data management start here 
Route::get('/addstudentform',[StudentController::class,'addstudentform']);
Route::get('/editstudentform/{id}',[StudentController::class,'editstudentform']);
Route::post('/update/{id}',[StudentController::class,'update']);
Route::post('/store', [StudentController::class,'store']);
Route::get('/destroy/{id}',[StudentController::class,'destroy']);


// student data management end here




// student section start here
Route::get('/studentlist', [HomeController::class, 'studentlist'])->name('studentlist');
Route::get('/student-detail',[HomeController::class,'studentDetail'])->name('studentDetail');



// student section end here



// teacher section start here
Route::get('/teacherlist', [HomeController::class, 'teacherlist'])->name('teacherlist');
Route::get('/teacher-detail', [HomeController::class, 'teacherDetail'])->name('teacherDetail');






// teacher section end here


// teacher controller function route will show here
Route::get('/add-teacher', [TeacherController::class, 'addteacher']);
Route::post('/storeteacher', [TeacherController::class,'storeteacher']);
Route::get('/edit-teacher/{id}', [TeacherController::class,'editteacher']);
Route::post('/updateteacher/{id}', [TeacherController::class, 'updateteacher']);
Route::get('/destroy-teacher/{id}', [TeacherController::class, 'destroyteacher']);


// teacher controller function route will show here


// blog controller function route will show here
Route::get('/admin-blog', [BlogController::class, 'adminblog']);




// blog controller function route will show here




