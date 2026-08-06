<?php
    class RetirarNumero {
        public function retirar_numero($replace) {
            return preg_replace('/[0-9]+/', '', $replace);
        }
    }
?>