<?php

use Illuminate\Support\Facades\Route;

use App\Models\car;
use http\Client\Curl\User;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return 'we are in about page';
});
Route::get('/about/test', function () {
    return 'this is test';
});
Route::get('/student', function () {
    return car::first();
});
Route::get('/students', function () {
    return car::all();
});
Route::get('/student/{student}', function (car $car) {
    return $car;
});
Route::get('/myuser/{user}',function (User $user){
   return $user;
});
Route::get('/aboutz',function (){
    return car::whereAge('Nisay')->first_name;
});

