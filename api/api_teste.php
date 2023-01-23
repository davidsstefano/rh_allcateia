<?php

require_once '../class/conn.php';
require_once '../class/data_hora.php';
$conn = new ConnDb();
$control = 0; //retorno padrao de erro.

$sql = "SELECT horario
FROM tbl_ponto
WHERE id_usuario = '7' AND dia = CURDATE()";


$result = $conn->select($sql, []);

print_r($result);

?>