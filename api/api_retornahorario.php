<?php

require_once '../class/conn.php';
session_start();

//capturando os filtros pro  retorno do JSON

$id_usuario = (isset($_GET['id_usuario'])) ? $_GET['id_usuario'] : null;
$dia = (isset($_GET['dia']))? $_GET['dia']: null;

// print_r($_GET);
// exit;

//criando o array do filtro SQL
// $tipo_consulta = 'vazio';
$sql_bind = "";

//validando os filtros

if (strlen($id_usuario) > 0 && is_numeric($id_usuario) && $id_usuario != 0) {
    //incrementando o campo de tipo no bind e no array para o sql
    $sql_bind = $sql_bind . ' usu.id_usuario  = :id_usuario';
    $array_filtro_sql['id_usuario'] = $id_usuario;
}

// if (strlen($dia) > 0 && is_numeric($dia) && $dia != 0) {
//      //incrementando o campo de tipo no bind e no array para o sql
//      $sql_bind = $sql_bind . 'AND dia  = :dia';
//      $array_filtro_sql['dia'] = $dia;
//  }

// print_r($array_filtro_sql);
// exit;

$conn = new ConnDb();
//criando a variavel de retorno para o json
$json_retorno = null;
//selecionar os agendamentos
$sql ="
select
usu.id_usuario,
usu.nome,
pon.dia,
pon.horario


FROM
	tbl_usuario as usu

INNER JOIN 
	tbl_ponto as pon
    on
    usu.id_usuario = pon.id_usuario
WHERE
$sql_bind AND 
dia = CURDATE()
order by
horario

";

$dados_db = $conn->select($sql, $array_filtro_sql);
if(count($dados_db) > 0){
    $json_retorno = $dados_db;
}
// var_dump($sql);
// exit();

//escrevendo o resultado do banco em JSON para a API
$json = array(
    'status' => 'ok',
    'horario' => $json_retorno
    
);
// var_dump($json);
// exit();
   


//formatando o cabecalho do retorno como JSON
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
echo json_encode($json);