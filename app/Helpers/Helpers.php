<?php

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
}
