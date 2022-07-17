<?php
$servidor="localhost";
$usuario="root";
$password="";
$bd="bd_integradora";

// Crear una variable para la conexion 
$conn=mysqli_connect($servidor,$usuario,$password,$bd);

// Comprobar la conexion 
if (!$conn)
{
  die("Error al realizar la conexion".mysqli_connect_error());
}
echo "Conexion realizada exitosamente";
?>

