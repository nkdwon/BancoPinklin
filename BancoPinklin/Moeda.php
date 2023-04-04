<?php 


    class Moeda{

        public static function converteReal($real){
         $real = number_format($real, 2,",", ".");
           return "R$ " . $real;
        }

    }
?>