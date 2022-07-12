<?php

echo "<h2>Aquí se resivirá la información del formulario -registro-<h2>";

$codigo=$_GET["codigo_del_calzado"];
echo "El código del calzado es: ".$codigo."<br>";

$descripcion=$_GET["descripcion"];
echo "La descripcion del calzado es: ".$descripcion."<br>";

$talla=$_GET["talla"];
echo "La talla del calzado es: ".$talla."<br>";

$precio=$_GET["precio"];
echo "El precio del calzado es: ".$precio."<br>";
?>