<?php
  include("conexion.php");
  $nombre = $_POST['nombre'];
  $user = $_POST['username'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $mobile = $_POST['mobile'];

  $hash = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 10]);

  $sql = "INSERT INTO usuarios (nombre, correo, pass, nombre_usuario) VALUES ('$user', '$email', '$hash', '$nombre')";

  if($conn -> query($sql)){
    header("LOCATION: ../login.html");
  } else {
    echo "malo";
  }

 ?>
