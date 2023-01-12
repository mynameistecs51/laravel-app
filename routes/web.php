<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\StudentController;
use App\Models\Role;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route for normal student
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [HomeController::class, 'index']);
});

//Route for normal admin
// Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard', [AdminController::class, 'index']);
        Route::get('/home', [HomeController::class, 'index'])->name('home.index');
       
        //Student
        Route::get('student', [StudentController::class, 'add'])->name('studentAdd');
        Route::get('student/studentSkill', [StudentController::class, 'studentSkills'])->name('updateSkills');
    });
// });
