<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\IniCon;


Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[IniCon::class,'index.html']);