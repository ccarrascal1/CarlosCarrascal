<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class FormularioController extends Controller
{
    public function index() {
        return view('formulario.index');
    }

    public function imprimir(Request $request) {

        $res = $request->validate([
            'nombres' => 'required|string',
            'apellidos' => 'required|string',
            'edad' => 'required|integer',
            'profesion' => 'required|string'
        ]);

        var_dump($res);
    }
}
