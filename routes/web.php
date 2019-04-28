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
    $routeVar = ['name' => 'home'];
    return view('home', compact('routeVar'));
});

Route::get('/about', function () {
    $routeVar = ['name' => 'about'];
    return view('about', compact('routeVar'));
});

Route::get('/contact', function () {
    $routeVar = ['name' => 'contact'];
    return view('contact', compact('routeVar'));
});

Route::get('/home', function () {
    $routeVar = ['name' => 'home'];
    return view('home', compact('routeVar'));
});

Route::get('/products', function () {
    $routeVar = ['name' => 'products'];
    return view('products', compact('routeVar'));
});

Route::get('/projects', function () {
    $routeVar = ['name' => 'projects'];
    return view('projects', compact('routeVar'));
});

Route::get('/team', function () {
    $routeVar = ['name' => 'team'];
    return view('team', compact('routeVar'));
});