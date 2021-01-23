<?php

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

// Route::get('/', function () {
//     return view('welcome');
// // });

Route::namespace('App\Http\Controllers\Site')->group(function(){
    
    Route::get('/', 'HomeController')->name('site.home');

    Route::get('produtos', 'CategoryController@index')->name('site.products');
    Route::get('produtos/{slug}', 'CategoryController@show')->name('site.products.category'); //SINTAXE LARAVEL 7 E ANTERIORES
    // Route::get('produtos/{slug}',[CategoryController::class, 'show']); 
    // SINTAXE LARAVEL 8 - Obrigatorio usar o use App\Http\Controllers\Site\CategoryController;

    Route::get('blog', 'BlogController')->name('site.blog');

    // Rota simples que vai retornar uma pagina totalmente estatica
    Route::view('sobre', 'site.about.index')->name('site.about');

    Route::get('contato', 'ContactController@index')->name('site.contact');
    Route::post('contato', 'ContactController@form')->name('site.contact.form');

});


