<?php

use Carbon\Carbon;

if (!function_exists('calcular_edad')) {
    function calcular_edad($fecha_nacimiento)
    {

        list($ano, $mes, $dia) = explode("-", $fecha_nacimiento);
        $ano_diferencia = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0) {
            $ano_diferencia--;
        }

        return $ano_diferencia;
    }

    // Devuelve el tiempo de diferencia entre dos fechas en formato "años y meses"
    function calcular_tiempo($fecha_inicio, $fecha_fin, $current)
    {
        $fecha_inicio = Carbon::parse($fecha_inicio);
        $fecha_fin = Carbon::parse($fecha_fin);
        $fecha_actual = Carbon::now();

        // Si es el trabajo actual, se calcula desde la fecha actual
        if ($current) {
            $fecha_fin = $fecha_actual;
        }

        $tiempo = $fecha_inicio->diff($fecha_fin);

        $tiempo_texto = "";

        if ($tiempo->y > 0) {
            $tiempo_texto .= $tiempo->y . " año";
            if ($tiempo->m > 0) {
                $tiempo_texto .= ", ";
            }
        }

        if ($tiempo->m > 0) {
            $tiempo_texto .= $tiempo->m . " meses ";
            if ($tiempo->d > 0) {
                $tiempo_texto .= ", ";
            }
        }

        if ($tiempo->d > 0) {
            //$tiempo_texto .= $tiempo->d . " días ";
            $tiempo_texto .= '';
        }
       
        return $tiempo_texto;
    }
}
