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
    $data = [
        'benvenuto' => 'Benvenuto nella Home!',
        'sottotitolo' => 'Questo è il sottotitolo della Home'
    ];
    return view('home', $data);
});

Route::get('/features', function () {
    $data = [
        'titolo' => 'Titolo Features',
        'sottotitolo' => 'Sottotitolo Features'
    ];
    return view('features', $data);
});

Route::get('/pricing', function () {
    $data = [
        'titolo' => 'Titolo Pricing',
        'sottotitolo' => 'Sottotitolo Pricing'
    ];
    return view('pricing', $data);
});
