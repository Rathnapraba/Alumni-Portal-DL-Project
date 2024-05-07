<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobPostMail;

use App\Http\Controllers\ChatbotController;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\JobpostController;
use Illuminate\Support\Facades\Auth; 

use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;

use App\Models\Student;
use App\Models\Alumni;
use App\Models\Jobpost;
use App\Models\Comment;
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
    return view('home.index');
});

Route::get('/alumni', function () {
    return view('alumni.index');
})->name('alumni.index');

Route::get('/alumni/gallery', function () {
    return view('alumni.gallery');
})->name('alumni.gallery');

Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index');

Route::get('/signin', function () {
    return view('signin.index');
});



Route::resource('/home', HomeController::class);



Route::resource('/alumniss', 'App\Http\Controllers\AlumniController');

// Route::resource('/alumni/register', AlumniController::class);


Route::get('/alumni/register', [AlumniController::class, 'create'])->name('alumni.register');
Route::post('/alumni/register', [AlumniController::class, 'store'])->name('alumni.store');


Route::resource('/students', 'App\Http\Controllers\StudentController');



// Route::post('/students/search', [StudentController::class, 'search']);


Route::post('/students/search', [StudentController::class, 'search'])->name('search');



// Route::post('/students/search1', [StudentController::class, 'index1'])->name('index1');

// Route for handling filter requests
Route::post('/students/filter', [StudentController::class, 'filter'])->name('filter');

// Routr::get('http://127.0.0.1:5000/')




Route::resource('/alumnis', 'App\Http\Controllers\JobpostController');

Route::get('/alumnis', [JobpostController::class, 'index1']);

// Route::get('/alumnis', [JobpostController::class, 'index'])->name('alumnis.index');

// Route to store comments
Route::post('/alumnis/comments', [JobpostController::class, 'store1']);



Route::get('/admin/view', [StudentController::class, 'store']);







Route::get('/login', [\App\Http\Controllers\Auth\loginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\loginController::class, 'login']);
Route::post('/logout', [\App\Http\Controllers\Auth\loginController::class, 'logout'])->name('logout');


// $message = 'Hello, chatbot!';
// $response = Http::post('http://127.0.0.1:5000/get', [
//     'msg' => $message,
// ]);



// Route::resource('/chatbot', [ChatbotController::class, 'interactWithChatbot']);
