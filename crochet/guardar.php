<?php 
include_once('conexion.php');

$clave=$_POST['clave'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje']; 

Echo "Los datos se han registrado:D"; 
echo "$clave,$nombre,$apellido,$telefono,$correo,$mensaje ";

$conectar=conn();
$sql="INSERT INTO contacto (clave,nombre,apellido,telefono,correo,mensaje)
VALUES('$clave','$nombre','$apellido','$telefono','$correo','$mensaje')";
$result = mysqli_query($conectar , $sql)or trigger_error("Query Failed! SQL- Error: ".msqli_error($conectar), E_USER_ERROR);

echo "$sql"; 

?>