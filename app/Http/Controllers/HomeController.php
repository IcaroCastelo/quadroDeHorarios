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
        // $retorno['success'] = true;
        // $retorno['mensage'] = "Operação realizada com sucesso!";
        
        $cpf =  $request->cpf;
  
        $quadroDeHorario = DB::select("SELECT 
        UNIDADE, 
        SALA, 
        DIASEMANA,
        NUMEROSEMANA,
        REPLACE(UNIDADE, '-', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS UNIDADE,
	REPLACE(SALA, '-', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS SALA, 
	REPLACE(DIASEMANA, '-', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS DIASEMANA,	
	REPLACE(CONCAT(HORAINICIAL, ' - ', HORAFINAL), '- - -', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS HORARIO,
        DISCIPLINA,
        CURSO,
        MATRICULA,
        ALUNO,
        CPF,
        DESCBLOCO
    FROM
        Corpore.dbo.VW_COMPROVANTE_MATRICULA_PORTAL_QUADRO_HORARIO(NOLOCK)
    WHERE
        CPF = '$cpf'--:RA1
    AND CODCOLIGADA = 1--:CODCOLIGADA1
    ORDER BY
        NUMEROSEMANA
        ");

       $retorno['data'] = $quadroDeHorario;

       return $retorno;
    }
}
