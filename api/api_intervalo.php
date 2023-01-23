<?php

require_once '../class/conn.php';
require_once '../class/data_hora.php';
$conn = new ConnDb();
$control = 0; //retorno padrao de erro.


$sql = "SELECT horario
FROM tbl_ponto
WHERE id_usuario = '9' AND dia = CURDATE()";

$result = $conn->select($sql, []);



foreach ($result as $output => $val) {
     echo "$output = $val<br>";
};

print_r($result);

// $primeiro_h = $output['horario'];


// echo "<br>";
// echo $intervalo;
// echo "<br>";
// echo $primeiro_h;
// echo "<br>";
// print_r($segundo_h) ;