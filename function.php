<?php


function total_lead($conn){

        $sql ="SELECT count(*) total FROM lead";
        $resultado = $conn->query($sql);
        $per = $resultado -> fetch_assoc();
        echo $per['total'];
    }


    function oportunidades_wom($conn){
        $sql ="SELECT count(*) total FROM oportunidad where tipo='Ganado'";
        $resultado = $conn->query($sql);
        $per = $resultado -> fetch_assoc();
        echo $per['total'];

    }

    function oportunidades_cuota($conn){
        $sql ="SELECT count(*) total FROM oportunidad where tipo='Cuota'";
        $resultado = $conn->query($sql);
        $per = $resultado -> fetch_assoc();
        echo $per['total'];

    }

    function oportunidades_compromiso($conn){
        $sql ="SELECT count(*) total FROM oportunidad where tipo='Compromiso'";
        $resultado = $conn->query($sql);
        $per = $resultado -> fetch_assoc();
        echo $per['total'];

    }

    function LeadCreado() {
      $sql ="SELECT * FROM lead";
      $resultado = $conn->query($sql);
      $per = $resultado -> fetch_assoc();

    }

    function extraccion_lead($conn){

    $extraccion_datos = "SELECT * from lead";

    $resultado_extraccion = $conn -> query($extraccion_datos);

    while($result_lead = $resultado_extraccion->fetch_assoc()){

    	echo "<tr>
                     <td><a href='gestion-lead.php?id=$result_lead[id_cliente]'>".$result_lead['nombre']."</a></td>
                     <td><a href='gestion-lead.php?id=$result_lead[id_cliente]'>".$result_lead['correo']."</a></td>
                     <td>Edinburgh</td>
                     <td>61</td>
    				 <td>2011/04/25</td>
    				 <td><a href='gestion-lead.php?id=$result_lead[id_cliente]'>".$result_lead['creador']."</a></td>

             </tr> </a>";

    	}
    }

function edicionComentarios($id, $conn){

}

function editarGestiones($conn, $id, $idCliente) {

  $extraccion_gestion = "SELECT comentario from notas_gestiones where id = '$id'";

  $resultado_gestion = $conn -> query($extraccion_gestion);

  $perdomoGestion = $resultado_gestion ->fetch_assoc();
  echo "<textarea class='form-control' name='valor' id='nota' rows='5' id='leave_comment' placeholder='El cliente me indica pago para el día...'>".$perdomoGestion['comentario']."</textarea>
        <input type='hidden' name='id' value='$id'>
        <input type='hidden' name='idCliente' value='$idCliente'>
        ";
}

function sesionesLogueo(){
  include('sql/variables-usuarios.php');
}




?>
