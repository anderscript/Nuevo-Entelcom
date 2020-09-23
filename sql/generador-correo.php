<?php
$correo = $_POST['correo'];
$correocc = $_POST['correocc'];
$mensaje = $_POST['mensaje'];
$asunto = $_POST['asunto'];

if (!empty($correo) && !empty($mensaje) && !empty($asunto)){
  $header = "FROM: noreply@example.com"."\r\n";
  $header .="Reply-To: noreply@example.com"."\r\n";
  $header .= "X-Mailer: PHP/". phpversion();
  $mail = mail($correo, $asunto, $mensaje, $header);

  if($mail){
    echo "Enviado exitosamente.";
  }
}

?>
