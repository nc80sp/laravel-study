<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', fn() => view('index'));
Route::get('/curriculum', fn() => view('curriculum'));
Route::get('/hello', fn() => view('hello', ['name' => '<h2>千葉</h2>', 'course' => 'Laravel']));

