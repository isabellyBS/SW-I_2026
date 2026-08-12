<?php
    class calcImc {
        public function calcular($peso, $altura) {
            if ($peso != 0 || $altura != 0) {
                return $peso / ($altura * $altura);
            }
        }
    }
?>