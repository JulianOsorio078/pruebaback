<?php

namespace App\Http\Controllers;

use App\Models\Calculo;

class EjercicioController extends Controller
{
    public function calculateNumber($numero1,$numero2){
        $resultado = bcadd($numero1,$numero2);
        $message = '';
        $fibonacci  = [0,1];
        for($i=2; $i <= 100; $i++){
            $valorFibonacci = bcadd($fibonacci[$i-1],$fibonacci[$i-2]);
            $fibonacci[] = $valorFibonacci;
            if($valorFibonacci == $resultado){
                $message = "El resultado de la operación esta en la secuencia fibonacci";
            }
        }
        $calculo = new Calculo();
        $calculo->numero1 = $numero1;
        $calculo->numero2 = $numero2;
        $calculo->resultado = $resultado;
        $calculo->save();
        return [
            "result"=>$resultado,
            "message"=>$message,
        ];
    }
}
