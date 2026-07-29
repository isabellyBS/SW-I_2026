<?php
    class Fatorial
    {
        public function fatoracao($n)
            {
                $resultado= $n;
                while ($n > 1)
                    {
                        $resultado = $resultado * ($n - 1);
                        $n -= 1;
                    }
                return $resultado;
            }
    }
?>