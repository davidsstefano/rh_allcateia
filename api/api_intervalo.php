<?php

require_once '../class/conn.php';
require_once '../class/data_hora.php';
$conn = new ConnDb();
$control = 0; //retorno padrao de erro.

$sql = "SELECT horario
FROM tbl_ponto
WHERE id_usuario = '9' AND dia = CURDATE()";

$result = $conn->select($sql, []);

$entrada = implode($result[0]);
$ent_almoco = implode($result[1]);
$sai_almoco = implode($result[2]);
$saida = implode($result[3]);

echo $entrada;
echo "<br>";
echo $ent_almoco;
echo "<br>";
echo $sai_almoco;
echo "<br>";
echo $saida;
echo "<br>";

$entrada = DateTime::createFromFormat("H:i:s",$entrada);
$ent_almoco = DateTime::createFromFormat("H:i:s",$ent_almoco);
$sai_almoco = DateTime::createFromFormat("H:i:s",$sai_almoco);
$saida = DateTime::createFromFormat("H:i:s",$saida);

$intervalo_1 = $entrada->diff($ent_almoco);

$intervalo_2 = $ent_almoco ->diff($sai_almoco);

$intervalo_3 = $sai_almoco ->diff($saida);

echo "<p>Primeira diferença</p>";
echo $intervalo_1->format('%H:%I:%S');
echo "<br>";
echo "<p>Segunda diferença</p>";
echo $intervalo_2->format('%H:%I:%S');
echo "<br>";
echo "<p>Terceira diferença</p>";
echo $intervalo_3->format('%H:%I:%S');

// echo "<br>";

