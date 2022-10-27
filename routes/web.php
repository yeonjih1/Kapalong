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

Route::get('/', function () {
    return view('AdminPanel.dashboard');
});

Route::get('inventory', function(){
    return view('AdminPanel.inventory');
});

Route::get('Members', function(){
    return view('AdminPanel.Members');
});

Route::get('SCA', function(){
    return view('AdminPanel.SCA');
});

Route::get('Agent', function(){
    return view('AdminPanel.Agent');
});
