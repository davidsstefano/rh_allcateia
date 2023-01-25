<?php

require_once '../class/conn.php';
require_once '../class/data_hora.php';
$conn = new ConnDb();
$controle = "";
$hora_atual = "";

$id_usuario = (isset($_GET['id_usuario'])) ? $_GET['id_usuario'] : null;


$sql = "SELECT DATE_FORMAT(abertura_ponto, '%H:%i:%S')as horario
FROM tbl_ponto
WHERE id_usuario = '9' AND DATE(abertura_ponto) = CURDATE()";


$result = $conn->select($sql, []);
foreach ($result as $output) {
}

// print_r($result);

if ($result > 0) {

          $hora_atual = $output['horario'];
         
}

echo $hora_atual;
// echo "<br>";
// echo $controle;


