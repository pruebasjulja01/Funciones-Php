<!-- Nombre de programador
Curso: Desarrollo Web con Php
Evidencia 2: Taller: “Uso de funciones” -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones Basicas</title>
</head>
<body>
<h2>Operaciones Basicas</h2>
  <form  id="form1" method="post" action="index.php">
    <input type="text" type="text" name="numero1" />

    <select name="opciones">
        <option value="0">Sumar</option>
        <option value="1">Restar</option>
        <option value="2">Multiplicar</option>
        <option value="3">Dividir</option>
    </select>

    <input type="text" name="numero2" />
    <br>
    <input type="submit" name="calcular" value="Calcular"><input type="reset" value="Borrar">
    </form>

<?php

// Nombrar esta linea

    include ("biblioteca.php");

// Nombrar esta linea

        if (isset($_REQUEST['calcular'])){
            $n1  =  $_REQUEST['numero1'];
            $n2  =  $_REQUEST['numero2'];
            $op  =  $_REQUEST['opciones'];
    
// Nombrar esta linea

            switch ($op) {
                case 0;
                echo "La suma de $n1 + $n2 = ".sumar($n1,$n2);
                break;
            
                case 1;
                echo "La resta de $n1 - $n2 = ".restar($n1,$n2);
                break;
    
            
                case 2;
                echo "La multiplicacion de $n1 * $n2 = ".multiplicar($n1,$n2);
                break;
    
           
                case 3;
                echo "La division de $n1 / $n2 = ".dividir($n1,$n2);
                break;
    
                default;
                echo "Opcion no existe";
                break;

            }
        }

?>
</div>
</body>
</html>
