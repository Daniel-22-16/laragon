<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagina1controller;
use App\Http\Controllers\pagina2controller;
use App\Http\Controllers\pagina3controller;
use App\Http\Controllers\pagina4controller;
use App\Http\Controllers\pagina5conroller;




Route::get('/', function () {
    return view('welcome');
    
});
///

Route::get("/pagina1",[Pagina1Controller::class, 'pagina1']);

///

route::get("/pagina2", [Pagina2Controller::class, 'pagina2']);

///

route::get("/pagina3", [Pagina3Controller::class, 'pagina3']);

///

route::get("/pagina4", [Pagina4Controller::class, 'pagina4']);

///

route::get("/pagina5", [Pagina5Conroller::class, 'pagina5']);


