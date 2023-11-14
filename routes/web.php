<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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
    return view('welcome');
});

//one-to-one-relationship example routes
Route::get('/',[TestController::class,'UsertoContacts']);
Route::get('/',[TestController::class,'ContactToUsers']);

//one-to-many-relationship example routes
Route::get('/usertopost',[TestController::class,'UserToPost']);
Route::get('/posttouser',[TestController::class,'PostToUser']);

//many-to-many-relationship example routes
Route::get('/posttocategories',[TestController::class,'PosttoCategories']);

//has-one-through example route
Route::get('/has-one-through',[TestController::class,'hasOneThrough']);

//has-many-through example route
Route::get('/has-many-through',[TestController::class,'hasManyThrough']);