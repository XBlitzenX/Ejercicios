<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // NIVEL 1 EJERCICIO 1
            function resta ($val1,$val2){
                return $val1-$val2;
            }
            // PARA PROBAR SI LA FUNCIÓN TIRA
            echo resta (8,2);
            echo '<br>';
            
            // NIVEL 1 EJERCICIO 2
            $valor = 25;
            if ($valor%2==0) {
                echo 'El número es par';
            } else {
                echo 'El número es impar';
            }
            echo '<br>';
            
            // NIVEL 1 EJERCICIO 3
            function parell_o_imparell ($valor){
            if ($valor%2==0) {
                echo 'El número es par';
            } else {
                echo 'El número es impar'; 
                }
            }
            parell_o_imparell(24);
            echo '<br>';
            
            // NIVEL 1 EJERCICIO 4
            $x = 0;
            while ($x<=10){
                echo $x.',';
                $x++;
                
            }
            echo '<br>';
            
            // NIVEL 2 EJERCICIO 1
            function esconditeTramposo (){
              for ($y = 0; $y <=10; $y+=2){
                  echo $y. ',';
              }
            }
            esconditeTramposo();
            echo '<br>';
            
            // NIVEL 2 EJERCICIO 2
            function esconditeTramposo2 ($cuenta){
              for ($y = 0; $y <=$cuenta; $y+=2){
                  echo $y. ',';
              }
            }
            esconditeTramposo2(50);
            echo '<br>';
            
            // NIVEL 2 EJERCICIO 3
            function esconditeTramposo3 ($cuenta = 10){
              for ($y = 0; $y <=$cuenta; $y+=2){
                  echo $y. ',';
              }
            }
            esconditeTramposo3();
            echo '<br>';
            
            // NIVEL 3 EJERCICIO 1
            for ($año = 1960; $año<=2016; $año+=4) {
                echo $año. ',';
            }
            echo '<br>';
            // NIVEL 3 EJERCICIO 2
            // PRIMERO ARGUMENTAMOS UNA FUNCIÓN PARA CADA VARIABLE A COMPRAR QUE CALCULE EL PRECIO POR CANTIDAD
            function chocolate ($numChocolate){
                $A = $numChocolate*1;
                return $A; // RETURN POR QUE QUEREMOS QUE NOS DEVUELVA EL VALOR, NO QUE LO IMPRIMA
            }
            function chicle ($numChicle){
                $B = $numChicle*0.5;
                return $B;
            }
            function caramelo ($numCaramelo){
                $C = $numCaramelo*1.50;
                return $C;
            }
            // DESPUÉS HACEMOS UNA FUNCIÓN QUE SUME LOS 3 PRECIOS
            function sumaTotal ($A,$B,$C){
                $total = $A + $B + $C;
                echo $total;
            }
            // PARA EJECUTARLO IGUALAMOS LAS VARIABLES QUE VAN A SUMA TOTAL CON LA FUNCIÓN
            $A = chocolate(2);
            $B = chicle(1);
            $C = caramelo(1);
            // Y AHORA SE PASAN ESTAS VARIABLES AL TOTAL
            sumaTotal($A, $B, $C);
            echo '<br>';
            
            // NIVEL 3 EJERCICIO 3
            function cribaEratostenes ($numMax){
                // PRIMERO ASIGNAMOS UN VALOR BASE 2 Y CREAMOS UN ARRAY INCLUYENDO TODOS LOS NÚMEROS DESDE 2 HASTA EL NÚMERO MÁXIMO QUE SE NOS DIGA
                $valor = 2;
                while ($valor <= $numMax){
                    $arrayNumeros[] = $valor;
                    $valor++;
                }
                // AHORA INICIAMOS UN BUCLE DENTRO DE OTRO BUCLE, EL PRIMER BUCLE ELIGE EL VALOR DEL SEGUNDO PASO Y COMPRUEBA SI HAY QUE REHACER EL SEGUNDO PASO
                for ($valor=2; $valor**2<$numMax; $valor++ ){   
                    // ESTE SEGUNDO BUCLE REALIZA EL TERCER PASO
                    for ($x=2; $x*$valor<=$numMax;$x++){
                        $valorAQuitar = $x*$valor-2; // RESTAMOS 2 A VALORAQUITAR PARA QUE CUADRE CON LA POSICIÓN DEL ELEMENTO QUE QUEREMOS QUITAR
                        unset($arrayNumeros[$valorAQuitar]);
                    }   
                }
                print_r($arrayNumeros);  // PARA QUE NOS DEVUELVA LA LISTA DE NÚMEROS PRIMOS
            }
            cribaEratostenes(20);
            
        ?>
    </body>
</html>