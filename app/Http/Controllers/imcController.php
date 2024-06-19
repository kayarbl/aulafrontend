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
            case($imc < 18.5):
                $resultado["faixa"] = "Abaixo do peso";
                break;
            case ($imc >= 18.5 && $imc <25):
                $resultado["faixa"] = "Peso Normal";
                break;
            case ($imc >= 25 && $imc < 30):
                $resultado["faixa"] = "Sobrepeso";
                break;
                default:
                $resultado["faixa"]= "Obesidade";
                break;
        }
        return view("imc.index", compact("resultado"));
    }
}