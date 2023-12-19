<?php

use App\Http\Controllers\DonorsController;
use App\Http\Controllers\OrphansController;
use App\Http\Controllers\ProgramsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourcesController;


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
    return view('admin.index');
});
// Route::get('/admin', function () {
//     return view('admin.index');
// });
Route::get('/services', function () {
    return view('admin.services.showall');
});
Route::get('/services/create', function () {
    return view('admin.services.create');
});
Route::resource('/product',ProductController::class );
Route::resource('/clients',ClientController::class );
Route::resource('/profiels',ProfileController::class );
Route::resource('/category',CategoryController::class );
Route::resource('/student',StudentController::class );
Route::resource('/cources',CourcesController::class );
Route::resource('/program',ProgramsController::class );
Route::resource('/Donors',DonorsController::class );

Route::resource('/orphan',OrphansController::class );



   


