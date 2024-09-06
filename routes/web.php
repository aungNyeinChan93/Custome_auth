<?php

use Illuminate\Support\Facades\Route;


require_once(__DIR__."/custome.php");

Route::get('/', function () {
    return view('welcome');
});


