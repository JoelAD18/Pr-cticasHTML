<?php

//Recibir variables  por el metodo GET | POST

$matricula=$_POST["matricula"];
$nombre=$_POST["nombre"];
$fecha_de_nacimiemto=$_POST["fecha de nacimiento"];

echo "La matricula es: ".$matricula."<br>";
echo "El nombre es: ".$nombre."<br>";
echo "La fecha de nacimiento es: ".$fecha_de_nacimiemto."<br>";

//Recibir la informacion en un formulario

echo '<form>';
echo '<label>Matrícula</label>';
echo '<input type="text" value"'.$matricula.'" name="matricula" placeholder="Introduce aquí tu matricula" require>';
echo '<br>';
echo '<label>Nombre</label>';
echo '<input type="text" value="'.$nombre.'"name="nombre" placeholder="Introduce aquí tu nombre" require>';
echo '<br>';
echo '<label>Fecha de nacimineto</label>';
echo '<input type="date" value="'.$fecha_de_nacimiemto.'" name="fecha_de_nacimiento" require>';
echo '<br>';
echo '<button>Enviar</button>';
echo '</form>';

?>