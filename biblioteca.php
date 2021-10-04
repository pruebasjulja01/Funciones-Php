<?php

/* Nombre del programador
   Curso: Desarrollo Web con Php
   Evidencia 2: Taller: “Uso de funciones” */

// Nombre esta linea

    function sumar($num1, $num2){

// Nombre esta linea

        if($num1 == ""){
            die("!Error!");
            
        }
        elseif($num2 == ""){
            die("!Error!");
           
        }
        else{
            $suma = $num1+$num2;

// Nombre esta linea

            return $suma;
        }

    }

// Nombre esta linea

function restar($num1, $num2){

// Nombre esta linea

        if($num1 == ""){
            die("!Error!");
            
        }
        elseif($num2 == ""){
            die("!Error!");
            
        }
        else{
            $resta = $num1-$num2;
            return $resta;
        }

    }

// Nombre esta linea

function multiplicar($num1, $num2){

// Nombre esta linea

        if($num1 == ""){
            die("!Error!");
        
        }
        elseif($num2 == ""){
            die("!Error!");
           
        }
        else{
            $multiplicacion = $num1*$num2;
            return $multiplicacion;
        }

    }

// Nombre esta linea

function dividir($num1, $num2){

// Nombre esta linea

        if($num1 == ""){
            die("!Error!");
            
        }
        elseif($num2 == ""){
            die("!Error!");
            
        }
        elseif($num1 == 0){
            die("La division de $num1 / $num2 = 0");
            
        }
        elseif($num2 == 0){
            die("La division de $num1 / $num2 = Error");
           
        }
        else{
            $division = $num1/$num2;
            return $division;
        }
           
    } 

?>