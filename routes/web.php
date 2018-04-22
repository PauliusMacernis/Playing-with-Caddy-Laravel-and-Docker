<?php

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

// e.g.: http://localhost:2015/test
Route::get('/test', function () {
    \Log::debug('Test Log');
    return 'It works';
});

// e.g.: curl http://localhost:2015/hello\?name\=paul
Route::get('/hello', function () {
    return ['hello' => request('name', 'world')];
});
