<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imcController extends Controller
{
    public function index ()
    {
        $resultado = [
        "imc" => "",
        "faixa"=> ""
        ];

        return view("imc.index")->with('resultado', $resultado);
    }

    public function calcular (Request $request)
    {
        $data = $request->all();

        $peso = $data["peso"];
        $altura = $data["altura"];

        $imc = $peso / ($altura ** 2);

        $resultado["imc"]= round($imc, 2);

        switch (true){
            
        }
    }
}