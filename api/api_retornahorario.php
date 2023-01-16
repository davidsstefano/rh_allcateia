<?php

require_once '../class/conn.php';
session_start();

//capturando os filtros pro  retorno do JSON

$id_grupo = (isset($_GET['id_grupo'])) ? $_GET['id_grupo'] : null;
$id_rodada = (isset($_GET['id_rodada']))? $_GET['id_rodada']: null;

// print_r($id_grupo);
// exit;

//criando o array do filtro SQL
// $tipo_consulta = 'vazio';
$sql_bind = "";

//validando os filtros

if (strlen($id_grupo) > 0 && is_numeric($id_grupo) && $id_grupo != 0) {
    //incrementando o campo de tipo no bind e no array para o sql
    $sql_bind = $sql_bind . ' grupo  = :id_grupo';
    $array_filtro_sql['id_grupo'] = $id_grupo;
}

// print_r($sql_bind);
// exit;

$conn = new ConnDb();
//criando a variavel de retorno para o json
$json_retorno = null;
//selecionar os agendamentos
$sql ="
select
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
$sql_bind

";

$dados_db = $conn->select($sql, $array_filtro_sql);
if(count($dados_db) > 0){
    $json_retorno = $dados_db;
}
// var_dump($json_retorno);
// exit();

//escrevendo o resultado do banco em JSON para a API
$json = array(
    'status' => 'ok',
    'horaio' => $json_retorno
    
);
// var_dump($json);
// exit();
   


//formatando o cabecalho do retorno como JSON
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
echo json_encode($json);