<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produto; 
use App\Models\Cliente; 
use Illuminate\Http\Request;

// Home
Route::get('/', function () {
    return view('welcome');
});

// Products form
Route::get('/form', function () {
    return view('form');
});

// Clients form
Route::get('/form_client', function () {
    return view('form_client');
});

// Products Register 
Route::post('/cadastrar-produto', function(Request $request) {
    //dd($request->all());

    Produto::create([
        'nome' => $request->name,
        'valor' => $request->value,
        'estoque' => $request->quantity 
    ]);

    return redirect('/'); 
});

// clients Register 
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

// list products 
Route::get('/list-product/{id}', function($id) {
    //dd(Produto::find($id)); //debug and die
    $product = Produto::find($id);
    return view('list_products', ['produto' => $product]);
});

