<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\ModelBook;
use App\Models\AutorModel;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryConroller;

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



Route::namespace('Site')->group(function(){
    
    // Rotas para a Relação de autores
    Route::get('books','BooksController@index')->name('homeBook')->middleware('auth');
    Route::get('books/show/{slug}','BooksController@show')->name('exibirBook')->middleware('auth');
    Route::delete('books/deletar/{slug}','BooksController@destroy')->name('deletarBook')->middleware('auth');
    Route::get('books/confirmar/{slug}','BooksController@confirm')->name('confirmeBook')->middleware('auth');
    Route::get('books/create','BooksController@create')->name('criarBook')->middleware('auth');
    Route::post('books/store','BooksController@store')->name('inserirBook')->middleware('auth');
    Route::get('books/{slug}/edit','BooksController@edit')->name('formEditarBook')->middleware('auth');
    Route::put('books/{id}','BooksController@update')->name('editarBook')->middleware('auth');



    // Rotas para a Relação de autores
    Route::get('autores','AutoresController@index')->name('homeAutor')->middleware('auth');
    Route::get('autores/show/{slug}','AutoresController@show')->name('exibirAutor')->middleware('auth');
    Route::delete('autores/deletar/{slug}','AutoresController@destroy')->name('deletarAutor')->middleware('auth');
    Route::get('autores/confirmar/{slug}','AutoresController@confirm')->name('confirmeAutor')->middleware('auth');
    Route::get('autores/create','AutoresController@create')->name('criarAutor')->middleware('auth');
    Route::post('autores/store','AutoresController@store')->name('inserirAutor')->middleware('auth');
    Route::get('autores/{slug}/edit','AutoresController@edit')->name('formEditarAutor')->middleware('auth');
    Route::put('autores/{slug}','AutoresController@update')->name('editarAutor')->middleware('auth');
    Route::post('searchautor','AutoresController@searchAutor')->name('searchAutor');
   


    

});

Route::post('search','SearchController')->name('search');

// Route::middleware(['auth:sanctum', 'verified'])->get('/books', function () {
//     $Books = ModelBook::all();
//     return view('books.index',['books' => $Books]);
// })->name('dashboard');


// Route::group(['middleware' => 'Site'], function () {
//     $Books = ModelBook::all();
//     return view('books.index',['books' => $Books]);
// });


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $Books = ModelBook::all();
    $autors = AutorModel::all();
    return view('dashboard',['books'=> $Books],['autors'=>$autors]);
})->name('dashboard');
