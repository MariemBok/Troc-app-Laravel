<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/articles', [PostController::class, 'index'])->name('articles');

Route::get('article', function(){
    return redirect()->route('articles');
});

Route::get('/{name?}', [HelloController::class, 'hello'])->where('name','[A-Za-z]+');


Route::get('hello-world', function () {
    return view('hello-world');
});

Route::get('/facture/{n}', function ($n) {
    return view('facture')->with('number', $n);
})->where('n', '[0-9]+');


Route::get('/articles/{id}', [PostController::class,'show']);

Route::get('/db', function(){
    return view('db');
} );



