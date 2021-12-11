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
    $nome = "Marlon";

    $arr = [1, 2, 3, 4, 5];

    return view('welcome',
        ['nome' => $nome,
        'idade' => 24,
        'profissao' => 'programador',
        'arr' => $arr
    ]);
});

Route::get('/contact', function () {
    return view('products');
});

Route::get('/produtos', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('product', [
        "id" => $id
    ]);
});