<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;



// Route::get('/', function () {
//     return view('welcome');
// });








//pages route---------------------------------------------------------------------------------------------------
Route::get('/', [                               PagesController::class, 'index'                                 ]);
Route::get('/admin', [                          PagesController::class, 'admin'                                 ]);
Route::get('/about', [                          PagesController::class, 'about'                                 ]);
//End of Pages Route--------------------------------------------------------------------------------------------





//routing resources
Route::resource('post', '\App\Http\Controllers\postsController');
Route::resource('workexp', '\App\Http\Controllers\WorkexperiencesController');
Route::resource('geninfo', '\App\Http\Controllers\PersonalinfosController');
Route::resource('address', '\App\Http\Controllers\AddressesController');
Route::resource('eligibility', '\App\Http\Controllers\EligibilitiesController');
Route::resource('education', '\App\Http\Controllers\EducationsController');
Route::resource('learninganddevelopment', '\App\Http\Controllers\LearninganddevelopmentsController');
Route::resource('family', '\App\Http\Controllers\FamiliesController');
Route::resource('children', '\App\Http\Controllers\ChildrensController');
Route::resource('voluntarywork', '\App\Http\Controllers\VoluntaryworksController');
Route::resource('admin', '\App\Http\Controllers\AdminController');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('change-password', '\App\Http\Controllers\ChangePasswordController@index');
Route::post('change-password', '\App\Http\Controllers\ChangePasswordController@store')->name('change.password');
