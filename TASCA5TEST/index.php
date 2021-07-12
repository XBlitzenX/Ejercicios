<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // NIVEL 1 EJERCICIO 1
            // DECLARAR VARIABLES
            echo 'NIVEL 1 EJERCICIO 1 <br>';
            $integer = 5;
            $double = 5.69;
            $string = 'Me llamo Javi :)';
            $boolean = TRUE;
            // IMPRESION DE VARIABLES
            echo $integer;
            echo "<br>";
            echo $double;
            echo "<br>";
            echo $string;
            echo "<br>";
            echo $boolean;
            echo "<br>";
            echo "<br>";
            
        // NIVEL 1 EJERCICIO 2    
            echo 'NIVEL 1 EJERCICIO 2 <br>';
            $string2 = 'Esta es otra string distinta';
            // ESTO MIDE LAS STRINGS
            echo strlen($string);
            echo "<br>";
            echo strlen($string2);
            echo "<br>";
            // ESTO PONE LAS STRINGS DEL REVÉS
            echo strrev($string);
            echo "<br>";
            echo strrev($string2);
            echo "<br>";
            // ESTO CONCATENA STRINGS
            echo $string.$string2;
            echo "<br>";
            echo "<br>";
            
        // NIVEL 1 EJERCICIO 3    
            echo 'NIVEL 1 EJERCICIO 3 <br>';
            // CREACIÓN DE UNA CONSTANTE
            define("constante", "Javier Anadón Ochavo");
            echo constante;
            echo "<br>";
            echo "<br>";
            
        // NIVEL 2 EJERCICIO 1  
            echo 'NIVEL 2 EJERCICIO 1 <br>';
            // CREACIÓN DE ARRAY
            $array = array(1,3,5,7,9);
            // ESTE COMANDO IMPRIME LAS ARRAYS EN FORMATO LEÍBLE
            print_r($array);
            echo "<br>";
            $array2 = array(2,4,6);
            print_r($array2);
            echo "<br>";
            echo "<br>";
            
        // NIVEL 2 EJERCICIO 2  
            echo 'NIVEL 2 EJERCICIO 2 <br>';
            // AÑADE UN VALOR MÁS AL ARRAY2
            $array2[] = 11;
            print_r($array2);
            echo "<br>";
            echo "<br>";
            
        // NIVEL 2 EJERCICIO 3
            echo 'NIVEL 2 EJERCICIO 3 <br>';
            // ASÍ SE UNEN 2 ARRAYS EN UNO NUEVO
            $arrayunido = array_merge($array,$array2);
            echo count($arrayunido);
            echo "<br>";
            echo "<br>";
            
        // NIVEL 3 EJERCICIO 1
            echo 'NIVEL 3 EJERCICIO 1 <br>';
            print_r($arrayunido);
            echo "<br>";
            echo "<br>";
            
        // NIVEL 3 EJERCICIO 2
            echo 'NIVEL 3 EJERCICIO 2 <br>';
            // CREACIÓN DE DOS INT Y DOS DOUBLE
            $X = 10;
            $Y = 3;
            $N = 13.420;
            $M = 8.69;
            // OPERACIONES DE X E Y
            echo $X;
            echo "<br>";
            echo $Y;
            echo "<br>";
            echo $X+$Y;
            echo "<br>";
            echo $X-$Y;
            echo "<br>";
            echo $X*$Y;
            echo "<br>";
            echo $X/$Y;
            echo "<br>";
            echo $X%$Y;
            echo "<br>";
            echo "<br>";
            // OPERACIONES DE N Y M
            echo $N;
            echo "<br>";
            echo $M;
            echo "<br>";
            echo $N+$M;
            echo "<br>";
            echo $N-$M;
            echo "<br>";
            echo $N*$M;
            echo "<br>";
            echo $N/$M;
            echo "<br>";
            echo $N%$M;
            echo "<br>";
            echo "<br>";
            // PARA TODAS LAS VARIABLES
            echo 2*$X;
            echo "<br>";
            echo 2*$Y;
            echo "<br>";
            echo 2*$N;
            echo "<br>";
            echo 2*$M;
            echo "<br>";
            echo $X+$Y+$N+$M;
            echo "<br>";
            echo $X*$Y*$N*$M;
        ?>
    </body>
</html>
