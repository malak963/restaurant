<?php

use Illuminate\Support\Facades\Route;

Route::get('/redirects',[\App\Http\Controllers\HomeController::class,"redirects"]);

Route::get('/',[\App\Http\Controllers\HomeController::class,"index"]);
Route::get('/users',[\App\Http\Controllers\AdminController::class,"user"]);
Route::get('/deleteuser/{id}',[\App\Http\Controllers\AdminController::class,"deleteuser"]);
Route::get('/foodm',[\App\Http\Controllers\AdminController::class,"foodm"]);
Route::post('/uploadfood',[\App\Http\Controllers\AdminController::class,"uploadfood"]);
Route::get('/deletem/{id}',[\App\Http\Controllers\AdminController::class,"deletem"]);
Route::get('/updatem/{id}',[\App\Http\Controllers\AdminController::class,"updatem"]);
Route::post('/update/{id}',[\App\Http\Controllers\AdminController::class,"update"]);
Route::post('/reservation',[\App\Http\Controllers\AdminController::class,"reservation"]);
Route::get('/viewreservation',[\App\Http\Controllers\AdminController::class,"viewreservation"]);
Route::get('/viewchef',[\App\Http\Controllers\AdminController::class,"viewchef"]);
Route::post('/uploadchef',[\App\Http\Controllers\AdminController::class,"uploadchef"]);
//Route::post('/upload',[\App\Http\Controllers\FoodChefController::class,"index"]);
Route::get('/updatechef/{id}',[\App\Http\Controllers\AdminController::class,"updatechef"]);
Route::post('/updateafoodchef/{id}',[\App\Http\Controllers\AdminController::class,"updateafoodchef"]);
Route::get('/deletechef/{id}',[\App\Http\Controllers\AdminController::class,"deletechef"]);
Route::post('/addcart/{id}',[\App\Http\Controllers\HomeController::class,"addcart"]);
Route::get('/showcart/{id}',[\App\Http\Controllers\HomeController::class,"showcart"]);
Route::get('/remove/{id}',[\App\Http\Controllers\HomeController::class,"remove"]);
Route::post('/orderconfirm',[\App\Http\Controllers\HomeController::class,"orderconfirm"]);
Route::get('/orders',[\App\Http\Controllers\AdminController::class,"orders"]);
Route::get('/search',[\App\Http\Controllers\AdminController::class,"search"]);


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware(['auth:sanctum','verified'])->get('/dashboard', function () {
         return view('dashboard');
     })->name('dashboard');