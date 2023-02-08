<?php

require_once '../class/conn.php';
require_once '../class/data_hora.php';
require_once '../class/verifica_sessao.php';

$conn = new ConnDb();
$control = 0; //retorno padrao de erro.


// print_r($_SESSION['id_usuario']);
// exit;


$id_usuario = $_SESSION['id_usuario'];
$aprovacao = "ok";
$observacao = "confirmado";
$entrada = 1;


$sql = "SELECT * from tbl_ponto where id_usuario = '$id_usuario' and abertura_ponto > '2023-02-07' ORDER BY abertura_ponto DESC LIMIT 1";
$result = $conn->select($sql, []);

// print_r($result[0]['entrada']);
// exit();
if (sizeof($result) > 0) {
     if ($result[0]['entrada'] == 1) {
          $entrada = 0;
     }
}


$sql = "INSERT INTO  tbl_ponto (id_usuario,abertura_ponto,aprovacao,observacao,entrada)VALUES(:id_usuario,:abertura_ponto, :aprovacao, :observacao, :entrada)";

$novo_id = $conn->insert($sql, array('id_usuario' => $id_usuario, 'abertura_ponto' => $abertura_ponto, 'aprovacao' => $aprovacao, 'observacao' => $observacao, 'entrada' => $entrada));


if ($novo_id > 0) {
     $control = 1;
} else {
     $control = 2;
}


header('Content-Type: application/json; charset=utf-8');

echo '{"controle":' . $control . '}';
