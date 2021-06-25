<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;

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
//     return view('welcome');
// });

//pages route--------------------------------------------------------------------------------------------
Route::get('/', [PagesController::class, 'index']);
Route::get('/children', [PagesController::class, 'children']);
Route::get('/education', [PagesController::class, 'education']);
Route::get('/elligibility', [PagesController::class, 'elligibility']);
Route::get('/learning_and_development', [PagesController::class, 'learning_and_development']);
Route::get('/personal_information', [PagesController::class, 'personal_information']);
Route::get('/profile', [PagesController::class, 'profile']);
Route::get('/refference', [PagesController::class, 'refference']);
Route::get('/voluntary_work', [PagesController::class, 'voluntary_work']);
Route::get('/work_experience', [PagesController::class, 'work_experience']);

//--------------------------------------------------------------------------------------------------------
//routing resources

Route::resource('post', '\App\Http\Controllers\postsController');
Route::resource('workexp', '\App\Http\Controllers\WorkexperiencesController');
Route::resource('geninfo', '\App\Http\Controllers\PersonalinfosController');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
