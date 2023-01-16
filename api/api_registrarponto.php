<?php

require_once '../class/conn.php';
require_once '../class/data_hora.php';
$conn = new ConnDb();
$control = 0; //retorno padrao de erro.

if (isset($_POST['id_usuario'])) {

     // print_r($_POST);
     // print_r($dia);
     // print_r($hora);
     // exit;


     $id_usuario = addslashes($_POST['id_usuario']);
     $aprovacao = "ok";
     $observacao = "confirmado";

     $retorno = "SELECT * FROM tbl_ponto WHERE id_usuario = $id_usuario AND dia = CURDATE()";
     $result = $conn->select($retorno, []);

     

     if (count($result) < 4) {
          $sql = "INSERT INTO  tbl_ponto (id_usuario,dia,horario,aprovacao,observacao)VALUES(:id_usuario, :dia, :hora, :aprovacao, :observacao)";

          $novo_id = $conn->insert($sql, array('id_usuario' => $id_usuario, 'dia' => $dia, 'hora' => $hora, 'aprovacao' => $aprovacao, 'observacao' => $observacao));


          if ($novo_id > 0) {
               $control = 1;
          } else {
               $control = 2;
          }
     } else {
          $control = 3;
     }
}

header('Content-Type: application/json; charset=utf-8');

echo '{"controle":' . $control . '}';
