<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function somar(Request $req)
    {
        $totalCampos = $req->input('quantidade');
        return view('formSomar', [
            'quantidade' => $totalCampos,
            'operacao' => 'Soma'
        ]);
    }

    public function calcularSoma(Request $req)
    {
        $qtd = (int) $req->input('quantidade');
        $soma = 0;

        for ($i = 1; $i <= $qtd; $i++) {
            $valor = $req->input('n' . $i);
            if (is_numeric($valor)) {
                $soma += (float) $valor;
            }
        }

        return view('resultado', ['resultado' => $soma]);
    }

    public function subtrair(Request $req)
    {
        $qtdNumeros = $req->input('quantidade');
        return view('formSubtrair', [
            'quantidade' => $qtdNumeros,
            'operacao' => 'Subtração'
        ]);
    }

    public function calcularSubtracao(Request $req)
    {
        $qtd = $req->input('quantidade');
        $resultado = $req->input('n1');

        for ($i = 2; $i <= $qtd; $i++) {
            $valor = $req->input('n' . $i);
            $resultado -= $valor;
        }

        return view('resultado', ['resultado' => $resultado]);
    }

    public function multiplicar(Request $req)
    {
        $entradas = $req->input('quantidade');
        return view('formMultiplicar', [
            'quantidade' => $entradas,
            'operacao' => 'Multiplicação'
        ]);
    }

    public function calcularMultiplicacao(Request $req)
    {
        $qtd = $req->input('quantidade');
        $produto = 1;

        for ($i = 1; $i <= $qtd; $i++) {
            $valor = $req->input('n' . $i);
            $produto *= $valor;
        }

        return view('resultado', ['resultado' => $produto]);
    }

    public function dividir(Request $req)
    {
        $qtdNumeros = $req->input('quantidade');
        return view('formDividir', [
            'quantidade' => $qtdNumeros,
            'operacao' => 'Divisão'
        ]);
    }

    public function calcularDivisao(Request $req)
    {
        $qtd = $req->input('quantidade');
        $resultado = $req->input('n1');

        for ($i = 2; $i <= $qtd; $i++) {
            $divisor = $req->input('n' . $i);

            if ($divisor == 0) {
                return view('resultado', ['resultado' => 'Erro: não é possível dividir por zero.']);
            }

            $resultado /= $divisor;
        }

        return view('resultado', ['resultado' => $resultado]);
    }
}
