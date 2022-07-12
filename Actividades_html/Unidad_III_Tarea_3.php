<!DOCTYPE html>
<html>
    <body>

        <?php
        /* Variable */
            $var_1 = 50;
            $var_2 = 12;
            $var_3 = 20;

            /* Declarar 2 variables mayor */
            if ($var_1 > $var_2) {
                echo "El número mayor es: $var_1";
            } elseif ($var_2 > $var_1) {
            echo "El número mayor es:$var_2";}

            echo "<hr>";

            /* Declarar 3 variables menor */
            if ($var_1 < $var_2 and $var_1 < $var_3) {
                echo "El número $var_1 es menor que $var_2 y $var_3";
            } elseif ($var_2 < $var_1 and $var_2 < $var_3) {
            echo "El número $var_2 es menor que $var_1 y $var_3";
            } else echo "El número $var_3 es menor que $var_1 y $var_2";



        ?> 

    </body>
</html>