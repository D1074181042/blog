<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pokemons;

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


Route::get('/', function () {return view('welcome');});


Route::get('pokemons', [Pokemons::class,'index']);


//Route::get('pokemons', function (){return view('pokemons.index');});


Route::get('pokemons/create', [Pokemons::class,'create']);


Route::get('pokemons/{id}', [Pokemons::class,'show'])->where('id','[0-9]+');


Route::get('pokemons/{id}/edit', [Pokemons::class,'edit'])->where('id','[0-9]+');
