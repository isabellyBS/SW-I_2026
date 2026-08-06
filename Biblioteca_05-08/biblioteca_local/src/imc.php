<?php
    class calcImc {
        public function calcular($peso, $altura) {
            return $peso / ($altura * $altura);
        }
    }
?>