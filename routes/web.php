<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
    return view('home');
}); 
Route::get('/Executivo',function(){
    return view('executivo');
})->name('executivo');


//Usuário
Route::get('/Cadastro',[UserController::class,'index'])->name('cadastro-index');
Route::post('/Cadastro',[UserController::class,'store'])->name('cadastro-store');

//Executivo

//Mercado

//Marketing