<?php

use Illuminate\Support\Facades\Route;
use App\Services\MathService;

Route::get('/', function () {
    $math = new MathService();
    return "Hasil 2 + 3 = " . $math->add(2, 3);
});
