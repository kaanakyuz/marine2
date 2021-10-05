<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CategoryController;
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
    return view('front.home');
})->name('anasayfa');

Route::get('/iletisim' , function () {
    return view('front.contact') ;
})->name('iletisim');




Route::middleware(['auth:sanctum', 'verified'])->get('/panel', function () {
    return view('dashboard');
})->name('dashboard');


Route::group(['middleware' => ['auth' , 'isAdmin'] ,'prefix' => 'admin'],function (){
    Route::get('kategoriler/{id}' , [CategoryController::class , 'destroy'])->name('kategoriler.destroy');
    Route::resource('kategoriler', CategoryController::class);

});


