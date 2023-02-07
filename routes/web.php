<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ManagementStudentController;
use App\Http\Controllers\PublicController;
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


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route for normal student
Route::group(['middleware' => ['auth']], function () {
    // Route::get('/home', [HomeController::class, 'index']);
    Route::get('/public', [PublicController::class, 'index']);
});

//Route for normal admin
// Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard/index', [AdminController::class, 'index']);
        Route::get('/home', [HomeController::class, 'index'])->name('home.index');
       
        //Student
        Route::get('/student', [ManagementStudentController::class, 'add'])->name('studentAdd');
        Route::get('/student/studentSkill', [ManagementStudentController::class, 'studentSkills'])->name('updateSkills');
    });
// });
