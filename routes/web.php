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
        'sottotitolo' => 'Questo è il sottotitolo della Home',
        'bio' => 'La Dacia di Burebista (60-44 a.C.)',
        'pic' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Dacia_around_60-44_BC_during_Burebista%2C_including_campaigns_-_French.png/450px-Dacia_around_60-44_BC_during_Burebista%2C_including_campaigns_-_French.png'
    ];
    return view('home', $data);
});

Route::get('/features', function () {
    $data = [
        'titolo' => 'Titolo Features',
        'sottotitolo' => 'Sottotitolo Features',
        'bio' => 'Kastamonu vista dalla cittadella',
        'pic' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Kaleden_Cumhuriyet_Meydan%C4%B1_ve_%C3%87evresi.JPG/390px-Kaleden_Cumhuriyet_Meydan%C4%B1_ve_%C3%87evresi.JPG'

    ];
    return view('features', $data);
});

Route::get('/pricing', function () {
    $data = [
        'titolo' => 'Titolo Pricing',
        'sottotitolo' => 'Sottotitolo Pricing',
        'bio' => "Elementi dell'esercito messicano durante un combattimento a Apatzingán, Michoacán",
        'pic' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Fuerza_del_Estado_Michoac%C3%A1n.jpg/390px-Fuerza_del_Estado_Michoac%C3%A1n.jpg'

    ];
    return view('pricing', $data);
});
