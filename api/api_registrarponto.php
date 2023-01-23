<?php

require_once '../class/conn.php';
require_once '../class/data_hora.php';
$conn = new ConnDb();
$control = 0; //retorno padrao de erro.

if (isset($_POST['id_usuario'])) {

     // print_r($_POST);echo "<br>";
     // print_r($dia);echo "<br>";
     // print_r($hora);echo "<br>"; print_r($abertura_ponto);
     // exit;


     $id_usuario = addslashes($_POST['id_usuario']);
     $aprovacao = "ok";
     $observacao = "confirmado";

   
          $sql = "INSERT INTO  tbl_ponto (id_usuario,abertura_ponto,aprovacao,observacao)VALUES(:id_usuario,:abertura_ponto, :aprovacao, :observacao)";

          $novo_id = $conn->insert($sql, array('id_usuario' => $id_usuario, 'abertura_ponto'=> $abertura_ponto, 'aprovacao' => $aprovacao, 'observacao' => $observacao));


          if ($novo_id > 0) {
               $control = 1;
          } else {
               $control = 2;
          }
     } else {
          $control = 3;
     }


header('Content-Type: application/json; charset=utf-8');

echo '{"controle":' . $control . '}';
