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
    $links = [
        'Home' => '/',
        'links' => '/link',
        'About Us' => '/about'
    ];
    return view('welcome', ['program' => 'laravel!']);
});

Route::get('/links', function () {
    $links = [
        'Home' => '/',
        'links' => '/link',
        'About Us' => '/about'
    ];

    return view('link', ['program' => 'laravel!']);
});

Route::get('/about', function () {
    $links = [
        'Home' => '/',
        'links' => '/link',
        'About Us' => '/about'
    ];

    return view('link', ['program' => 'laravel!']);
});



