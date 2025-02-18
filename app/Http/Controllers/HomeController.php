<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    // public function quadroDeHorarioAjax(Request $request) {
    //     // $retorno['success'] = true;
    //     // $retorno['mensage'] = "Operação realizada com sucesso!";
        
    //     $cpf =  $request->cpf;
  
    //     $quadroDeHorario = DB::select("SELECT
    //     PROFESSOR,
    //     CHAPA,
    //         REPLACE(UNIDADE, '-', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS UNIDADE,
    //         REPLACE(SALA, '-', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS SALA, 
    //         ISNULL(
    //             CASE DIASEMANA                                                    
    //                 WHEN 'Seg' THEN 'Segunda'                                                    
    //                 WHEN 'Ter' THEN 'Terça'                                                    
    //                 WHEN 'Qua' THEN 'Quarta'                                                    
    //                 WHEN 'Qui' THEN 'Quinta'                                                    
    //                 WHEN 'Sex' THEN 'Sexta'                                                    
    //                 WHEN 'Sab' THEN 'Sábado'                                                    
    //                 ELSE '-'
    //             END, 
    //         '-') AS DIASEMANA,  
    //         REPLACE(CONCAT(HORAINICIAL, ' - ', HORAFINAL), '- - -', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS HORARIO,
    //         DISCIPLINA,
    //         CURSO,
    //         CPF,
    //         DESCBLOCO
    //     FROM
    //         Corpore.dbo.VW_REL_HORARIO_PROFESSOR (NOLOCK)
    //     WHERE
    //         CODCOLIGADA = 1
    //         AND CPF = '$cpf'
    //         AND CODPERLET = CASE 
    //             WHEN MONTH(GETDATE()) BETWEEN 1 AND 6 THEN CONCAT(YEAR(GETDATE()), '1')
    //             ELSE CONCAT(YEAR(GETDATE()), '2')
    //         END
    //     ORDER BY
    //         PROFESSOR,
    //         CURSO,
    //         DIASEMANA,
    //         DISCIPLINA;
        
    //         ");



    //     $quadroDeHorario = DB::select("SELECT 
    //         UNIDADE, 
    //         SALA, 
    //         DIASEMANA,
    //         NUMEROSEMANA,
    //         REPLACE(UNIDADE, '-', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS UNIDADE,
    //     REPLACE(SALA, '-', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS SALA, 
    //     REPLACE(DIASEMANA, '-', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS DIASEMANA,	
    //     REPLACE(CONCAT(HORAINICIAL, ' - ', HORAFINAL), '- - -', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS HORARIO,
    //         DISCIPLINA,
    //         CURSO,
    //         MATRICULA,
    //         ALUNO,
    //         CPF,
    //         DESCBLOCO
    //     FROM
    //     Corpore.dbo.VW_COMPROVANTE_MATRICULA_PORTAL_QUADRO_HORARIO(NOLOCK)
    //     WHERE
    //         CPF = '$cpf'--:RA1
    //     AND CODCOLIGADA = 1--:CODCOLIGADA1
    //     -- AND  [PERIODO LETIVO] = 20242
    //     ORDER BY
    //         NUMEROSEMANA
    //         ");

    //     $horariosAgrupados = [];
    //     foreach ($quadroDeHorario as $item) {
    //         $dia = $item->DIASEMANA;
    //         // dd($dia);
    //         if (!isset($horariosAgrupados[$dia])) {
    //             $horariosAgrupados[$dia] = [];
    //         }
    //         $horariosAgrupados[$dia][] = $item;
    //     }

    //     return response()->json(['data' => $horariosAgrupados]);
   
    // }

    public function quadroDeHorarioAjax(Request $request) {
        $cpf = $request->cpf;
        $tipo = $request->tipo;  // Recebe o valor 1 ou 2 do formulário
    
        if ($tipo == 2) {
            // Primeira consulta (professor)
            $quadroDeHorario = DB::select("SELECT
                    PROFESSOR,
                    CHAPA,
                    REPLACE(UNIDADE, '-', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS UNIDADE,
                    REPLACE(SALA, '-', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS SALA, 
                    ISNULL(
                        CASE DIASEMANA                                                    
                            WHEN 'Seg' THEN 'Segunda'                                                    
                            WHEN 'Ter' THEN 'Terça'                                                    
                            WHEN 'Qua' THEN 'Quarta'                                                    
                            WHEN 'Qui' THEN 'Quinta'                                                    
                            WHEN 'Sex' THEN 'Sexta'                                                    
                            WHEN 'Sab' THEN 'Sábado'                                                    
                            ELSE '-'
                        END, 
                    '-') AS DIASEMANA,  
                    REPLACE(CONCAT(HORAINICIAL, ' - ', HORAFINAL), '- - -', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS HORARIO,
                    DISCIPLINA,
                    CURSO,
                    CPF,
                    DESCBLOCO
                FROM
                    Corpore.dbo.VW_REL_HORARIO_PROFESSOR (NOLOCK)
                WHERE
                    CODCOLIGADA = 1
                    AND CPF = ?
                    AND CODPERLET = CASE 
                        WHEN MONTH(GETDATE()) BETWEEN 1 AND 6 THEN CONCAT(YEAR(GETDATE()), '1')
                        ELSE CONCAT(YEAR(GETDATE()), '2')
                    END
                ORDER BY
                    PROFESSOR,
                    CURSO,
                    DIASEMANA,
                    DISCIPLINA
            ", [$cpf]);
    
        } elseif ($tipo == 1) {
            // Segunda consulta (aluno)
            $quadroDeHorario = DB::select("SELECT 
                    UNIDADE, 
                    SALA, 
                    DIASEMANA,
                    NUMEROSEMANA,
                    UNIDADE,
                    SALA, 
                    DIASEMANA,    
                    -- REPLACE(UNIDADE, '-', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS UNIDADE,
                    -- REPLACE(SALA, '-', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS SALA, 
                    -- REPLACE(DIASEMANA, '-', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS DIASEMANA,    
                    REPLACE(CONCAT(HORAINICIAL, ' - ', HORAFINAL), '- - -', CASE WHEN DISCIPLINA LIKE '%- Distância' THEN 'EAD' ELSE 'PRESENCIAL' END) AS HORARIO,
                    DISCIPLINA,
                    CURSO,
                    MATRICULA,
                    ALUNO,
                    CPF,
                    DESCBLOCO
                FROM
                    Corpore.dbo.VW_COMPROVANTE_MATRICULA_PORTAL_QUADRO_HORARIO (NOLOCK)
                WHERE
                    CPF = ?
                    AND CODCOLIGADA = 1
                ORDER BY
                    NUMEROSEMANA
            ", [$cpf]);
        } else {
            return response()->json(['error' => 'Tipo de consulta inválido'], 400);
        }
    
        // Agrupar os horários por dia da semana
        $horariosAgrupados = [];
        foreach ($quadroDeHorario as $item) {
            $dia = $item->DIASEMANA;
            if (!isset($horariosAgrupados[$dia])) {
                $horariosAgrupados[$dia] = [];
            }
            $horariosAgrupados[$dia][] = $item;
        }
    
        return response()->json(['data' => $horariosAgrupados]);
    }
    
}
