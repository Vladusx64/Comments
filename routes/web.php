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


Route::get('/', 'CommentController@index')->name('form.create');// Виводить форму для створення коммента
Route::post('/', 'CommentController@store')->name('form.store'); //Зберігає комент

Route::get('showall', 'CommentController@showAll')->name('showAll'); //модерування

//операції для модерування
Route::get('commetn/{id}', 'CommentController@edit')->name('form.edit'); 
Route::get('commetn/blocked/{id}', 'CommentController@blocked')->name('form.blocked');
Route::get('commetn/new/{id}', 'CommentController@new')->name('form.new');
Route::get('commetn/delete/{id}', 'CommentController@destroy')->name('form.delete');