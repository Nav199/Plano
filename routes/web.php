<?php

use App\Http\Controllers\ExecutivoController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
    return view('pags.home');
})->name('home'); 
Route::get('/Executivo',function(){
    return view('executivo');
})->name('executivo');


//Usuário
Route::get('/Cadastro',[UserController::class,'index'])->name('cadastro-index');
Route::post('/Cadastro',[UserController::class,'store'])->name('cadastro-store');

//Login
Route::get('/Login',function(){
    return view('pags.login');
})->name('login');

//Executivo
Route::get('/Executivo',[ExecutivoController::class,'index'])->name('executivo-index');
Route::post('/Executivo',[ExecutivoController::class,'store'])->name('executivo-store');
//post de executivo

//Mercado
Route::get('/Mercado',function(){
    return view('plano.mercado');
}); 
//Marketing
Route::get('/Marketing',[MarketingController::class,'index'])->name('marketing-index');
Route::post('/Marketing',[MarketingController::class,'store'])->name('marketing-store');

//Operacional

//Financeiro
Route::get('/Estoque',function(){ // rota de estoque
    return view('plano.estoque');
}); 
Route::get('/Fixo',function(){
    return view('plano.inves_fixo');
});
