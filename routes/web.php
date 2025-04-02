<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produto; 
use App\Models\Cliente; 
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/form_client', function () {
    return view('form_client');
});


Route::post('/cadastrar-produto', function(Request $request) {
    //dd($request->all());

    Produto::create([
        'nome' => $request->name,
        'valor' => $request->value,
        'estoque' => $request->quantity 
    ]);

    return redirect('/'); 
});

Route::post('/cadastrar-cliente', function(Request $request) {
    //dd($request->all());

    cliente::create([
        'name' => $request->name,
        'telephone' => $request->telephone,
        'date_of_contact' => $request->date_contact,
        'origin' => $request->origin,
        'observation' => $request->observation 
    ]);

    return redirect('/'); 
});