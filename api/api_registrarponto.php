<?php

require_once '../class/conn.php';
require_once '../class/data_hora.php';


$conn = new ConnDb();

if (isset($_POST['id_usuario'])) {
     $id_usuario = addslashes($_POST['id_usuario']);
     $aprovacao = "ok";
     $observacao = "confirmado";

     $sql = "INSERT INTO  tbl_ponto (id_usuario,dia,horario,aprovacao,observacao)VALUES(:id_usuario, :dia, :hora, :aprovacao, :observacao)";

     $novo_id = $conn->insert($sql, array('id_usuario' => $id_usuario, 'dia' => $dia, 'hora' => $hora, 'aprovacao' => $aprovacao, 'observacao' => $observacao));

    
     if ($novo_id > 0) {

          echo "mensagem enviada com sucesso!!";

          header("Location: ../public/pag_funcionario.php");
     } else {
          echo "erro!!!";
     }
}
