<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return view('pages/homepage');
});

Route::get("login",function(){
    return view("authPages/login");
})->name("login");

Route::get("/about", function(){
    return view("/pages/about");
});
Route::get("/contactus", function(){
    return view("/pages/contact");
});

// Route::get("password.request",function(){
//     return view("authPages/login");
// })->name("password.request");

Auth::routes();

Route::get('/login', [LoginController::class, 'login']) ->name('login');

Route::get('/register', [RegisterController::class, 'create'])->name('register');
