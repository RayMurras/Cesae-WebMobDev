<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrendaController;

Route::resource('prendas', PrendaController::class);
