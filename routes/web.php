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
    return view('welcome');
});

//moi

Route::get('/dateDuJours', function () {
    $ldate = date('Y-m-d H:i:s');
    return view('dateDuJours', compact('ldate'));
});

Route::get('/fruits', function () {
    $fruits = ['pomme', 'cerise', 'tomate', 'citron'];
    return view('fruits', compact('fruits'));
});

//correction

Route::get('/dateDuJours2.0' , function () {
    $date = date('d-m-Y');
    $heure = date('H:i:s');
    return view('/dateDuJoursCorr', compact('date', 'heure'));
});

Route::get('/fruits2.0', function () {
    $fruits = ['orange', 'tomate', 'pomme', 'melon'];
    return view('/fruitCorr', compact('fruits'));
});




//test

Route::get('/test', function () {
    $prenom = 'charles';
    $nom = 'de Lalaing';
    $age = 22;

    $lists = ['surcre', 'lait', 'fromage'];
    return view('test', compact('prenom', 'nom', 'age', 'lists'));
});