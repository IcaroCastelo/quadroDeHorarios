<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function quadroDeHorarioAjax(Request $request) {
        $retorno['success'] = true;
        $retorno['mensage'] = "Operação realizada com sucesso!";
        
        $cpf =  $request->cpf;
  
        $quadroDeHorario = DB::select("SELECT 
        UNIDADE, 
        SALA, 
        DIASEMANA, 
        HORAINICIAL, 
        HORAFINAL, 
        DISCIPLINA,
        CURSO,
        MATRICULA,
        NOMEFANTASIA,
        CPF
    FROM
        Corpore.dbo.VW_COMPROVANTE_MATRICULA_PORTAL(NOLOCK)
    WHERE
        CPF = '$cpf'--:RA1
    AND CODCOLIGADA = 1--:CODCOLIGADA1
    ORDER BY
        NUMEROSEMANA,
        [PERIODO LETIVO] DESC");

       $retorno['data'] = $quadroDeHorario;

       return $retorno;
    }
}
