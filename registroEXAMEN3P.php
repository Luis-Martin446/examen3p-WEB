<?php
$con=mysqli_connect('localhost','root','','examen3p')or die('Error en la conexion al sevidor');

$sql="INSERT INTO registro

values(null, '".$_POST["nombre"]."','".$_POST["email"]."','".$_POST["password"]."')";

$resultado=mysqli_query($con,$sql) or die('Error en el query database');

mysqli_close($con);

echo 'El ingresado es:'.$_POST["nombre"];
echo 'El email es:'.$_POST["email"];