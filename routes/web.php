<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produto; 
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/cadastrar-produto', function(Request $request) {
    //dd($request->all());

    Produto::create([
        'nome' => $request->name,
        'valor' => $request->value,
        'estoque' => $request->quantity 
    ]);

    echo "Produto criado com sucesso!";
});