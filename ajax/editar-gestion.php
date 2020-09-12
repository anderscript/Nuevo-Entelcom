<?php
include('../sql/conexion.php');

$comentario = $_POST['valor'];
$id = $_POST['id'];
$idCliente = $_POST['idCliente'];
  $sql = "UPDATE notas_gestiones SET comentario = '$comentario' where id = '$id'  ";
  $resultadoEdicion = $conn -> query($sql);
  header("LOCATION: ../gestion-lead.php?id=$idCliente");
 ?>
