<?php
session_start();

include('conexion.php');
include('extraccion.php');

$usuario = $_POST['username'];
$pass = $_POST['password'];


$extraccion_usuario = "SELECT * from usuarios where nombre = '$usuario'";

	$resultado_usuario = $conn -> query($extraccion_usuario);

	$perdomo_usuario =$resultado_usuario -> fetch_assoc();

	if(password_verify($pass, $perdomo_usuario['pass'])){
         $_SESSION['nombre'] = $usuario;
         $_SESSION['clave'] = $perdomo_usuario['pass'];
		header('location: ../index.php');
	} else
	{
		header('location: ../auth-404.html');
	}



?>
