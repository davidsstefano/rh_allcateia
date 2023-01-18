<?php

require_once '../class/conn.php';
require_once '../class/data_hora.php';
$conn = new ConnDb();
$control = 0; //retorno padrao de erro.


$sql = "SELECT horario
FROM tbl_ponto
WHERE id_usuario = '9' AND dia = CURDATE()";

$result = $conn->select($sql, []);

foreach ($result as $output){
    
    
};

// var_dump($result) ;
print_r($result['0']);
echo "<br>";
print_r($result['1']);
echo "<br>";
print_r($result['2']);
echo "<br>";
print_r($result['3']);




echo "<br>";
echo $intervalo;