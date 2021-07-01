<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;



// Route::get('/', function () {
//     return view('welcome');
// });








//pages route---------------------------------------------------------------------------------------------------
Route::get('/', [                               PagesController::class, 'index'                                 ]);
Route::get('/children', [                       PagesController::class, 'children'                              ]);
Route::get('/education', [                      PagesController::class, 'education'                             ]);
Route::get('/elligibility', [                   PagesController::class, 'elligibility'                          ]);
Route::get('/learning_and_development', [       PagesController::class, 'learning_and_development'              ]);
Route::get('/personal_information', [           PagesController::class, 'personal_information'                  ]);
Route::get('/profile', [                        PagesController::class, 'profile'                               ]);
Route::get('/refference', [                     PagesController::class, 'refference'                            ]);
Route::get('/voluntary_work', [                 PagesController::class, 'voluntary_work'                        ]);
Route::get('/work_experience', [                PagesController::class, 'work_experience'                       ]);
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
