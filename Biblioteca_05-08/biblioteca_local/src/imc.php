<?php
    class calcImc {
        public function calcular($peso, $altura) {
            if ($peso != 0 || $altura != 0) {
                $IMC = $peso / ($altura * $altura);
                if ($IMC < 18.5) {
                    return "<h3>Seu IMC é: " . number_format($IMC, 2) . " - Abaixo do peso</h3>";
                } elseif ($IMC >= 18.5 && $IMC <= 24.9) {
                    return "<h3>Seu IMC é: " . number_format($IMC, 2) . " - Peso normal</h3>";
                } elseif ($IMC >= 25 && $IMC <= 29.9) {
                    return "<h3>Seu IMC é: " . number_format($IMC, 2) . " - Sobrepeso</h3>";
                } elseif ($IMC >= 30 && $IMC <= 34.9) {
                    return "<h3>Seu IMC é: " . number_format($IMC, 2) . " - Obesidade grau I</h3>";
                } elseif ($IMC >= 35 && $IMC <= 39.9) {
                    return "<h3>Seu IMC é: " . number_format($IMC, 2) . " - Obesidade grau II</h3>";
                } else {
                    return "<h3>Seu IMC é: " . number_format($IMC, 2) . " - Obesidade grau III</h3>";
                }
            }
        }
    }
?>