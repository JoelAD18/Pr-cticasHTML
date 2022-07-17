<?php

$codigo_calzado=$_GET["codigo"];
echo "El codigo es: ".$codigo_calzado."<br>";

$descripcion=$_GET["descripcion"];
echo "La descripcion es: ".$descripcion."<br>";

$talla=$_GET["talla"];
echo "La talla es: ".$talla."<br>";

$precio=$_GET["precio"];
echo "El precio del producto es: ".$precio."<br>";

include("conexion_bd_integradora.php");

$sql="INSERT INTO registro_calzado VALUES ($codigo_calzado,'$descripcion',$talla,$precio)";

//condicion para evaluar si se registro correctamente

if(mysqli_query($conn,$sql))
{
    echo "calzado registrado correctamente";
}
else
{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}

?>