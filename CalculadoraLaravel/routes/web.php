<?php

use App\Http\Controllers\CalculadoraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/somar', [CalculadoraController::class, 'somar']);
Route::post('/calcularSoma', [CalculadoraController::class, 'calcularSoma']);

Route::post('/subtrair', [CalculadoraController::class, 'subtrair']);
Route::post('/calcular-subtracao', [CalculadoraController::class, 'calcularSubtracao']);

Route::post('/multiplicar', [CalculadoraController::class, 'multiplicar']);
Route::post('/calcular-multiplicacao', [CalculadoraController::class, 'calcularMultiplicacao']);

Route::post('/dividir', [CalculadoraController::class, 'dividir']);
Route::post('/calcular-divisao', [CalculadoraController::class, 'calcularDivisao']);
