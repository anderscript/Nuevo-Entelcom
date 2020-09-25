<?php
$correo = $_POST['correo'];
$correocc = $_POST['correocc'];
$mensaje = $_POST['mensaje'];
$asunto = $_POST['asunto'];

if (!empty($correo) && !empty($mensaje) && !empty($asunto)){
  $header = "Esto es enviado des entelcom";

  $mail = mail($correo, $asunto, $mensaje, $header);

  if($mail){
    echo "Enviado exitosamente.";
  }
}

?>
