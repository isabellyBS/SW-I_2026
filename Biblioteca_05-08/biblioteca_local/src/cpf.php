<?php
    class VerificaCPF {
        public function verificar($cpf) {
            $cpf = preg_replace('/[^\d]/', '', $cpf);
            if (strlen($cpf) != 11) {
                return false;
            }
            for ($i = 0; $i < 10; $i++) {
                if ($cpf === str_repeat($i, 11)) {
                    return false;
                }
            }
            $dv1 = 0;
            for ($i = 0; $i < 9; $i++) {
                $dv1 += intval($cpf[$i]) * (10 - $i);
            }
            $dv1 = 11 - ($dv1 % 11);
            if ($dv1 >= 10) {
                $dv1 = 0;
            }
            if ($dv1 != intval($cpf[9])) {
                return false;
            }
            $dv2 = 0;
            for ($i = 0; $i < 10; $i++) {
                $dv2 += intval($cpf[$i]) * (11 - $i);
            }
            $dv2 = 11 - ($dv2 % 11);
            if ($dv2 >= 10) {
                $dv2 = 0;
            }
            if ($dv2 != intval($cpf[10])) {
                return false;
            }
            return true;
        }
    }
?>