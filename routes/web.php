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

// livewire crud
// Route::livewire('/','post.index')->name('post.index');
// Route::livewire('/create','post.create')->name('post.create');
// Route::livewire('/edit/{id}','post.edit')->name('post.edit');

Route::get('/',function(){
	return view('welcome');
});


// belajar yukcoding
Route::get('foo',function(){
    return 'Hello World';
});

Route::redirect('here','foo');

Route::get('user/{nama?}',function($nama){
    return 'nama '.$nama;
});

Route::get('test',function(){
    return view('welcome',['nama'=>'iwan']);
});

Route::get('home',function(){
    return view('home');
});

Route::get('student/export/','Student@export');

Route::view('studentscrud','livewire.students.home');