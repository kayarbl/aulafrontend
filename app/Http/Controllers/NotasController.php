<?php

    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    
    class notasController extends Controller
    {
        public function index()
    {
        $resultado = [
            "notas" => "",
            "faixa" => ""
        ];

        return view("notas.index")->with('resultado', $resultado);
        }   
        public function resultado(Request $request)
    {
        $data = $request->all();
        $notas = $data["notas"];
    
        $resultado = [
            "notas" => $notas,
            "faixa" => ""
        ];

        switch (true) {
            case ($notas <= 6):
                $resultado["faixa"] = "Reprovado";
                break;
            case ($notas >= 7):
                $resultado["faixa"] = "Aprovado";
                break;
        }
        return view("notas.index", compact("resultado"));
    }

    
    }
