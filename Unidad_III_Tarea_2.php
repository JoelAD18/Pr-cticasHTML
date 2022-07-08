<!DOCTYPE html>
<html>
    <body>


        <?php

            //Estes son las variables
            $num_entero_1 = 10;
            $num_entero_2 = 10;
            $num_decimal_1 = 12.56;
            $num_decimal_2 = 2.5;
            $txt1 = "Hola";
            $txt2 = "Mundo";

            //Aquí se realiza la suma de enteros
            echo "Suma de enteros:<br>";
            $suma_entero= $num_entero_1 + $num_entero_2;
            echo $suma_entero;

            echo "<hr>";


            //Aquí se realiza la suma de decimales
            echo "Suma de decimales:<br>";
            $suma_decimal= $num_decimal_1 + $num_decimal_2;
            echo $suma_decimal;

            echo "<hr>";

            //Aquí se realiza la multipliacion
            echo "Multiplicacion:<br>";
            $multipliacion = $num_entero_1 * $num_entero_2;
            echo $multipliacion;

            echo "<hr>";

            //Esto es la concatenación de palabras
            echo "Concatenacion:<br>";
            $textoCompleto = $txt1 . $txt2;
            echo $textoCompleto;

            echo "<hr>"

        ?> 

    </body>
</html>