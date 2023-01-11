<?php

require_once '../class/conn.php';


$conn = new ConnDb();
$controle = 0; //retorno padrao de erro.

$cargo = addslashes($_POST['cargo']);




if (isset($_POST['cargo'])) {
    // print_r($senha);
    // exit;  


    $sql = "SELECT nome FROM tbl_cadastro WHERE cargo = :cargo";
    $result = $conn->select($sql, array('cargo' => $cargo));
}
//     print_r($result[0]['categoria']);
//     exit;
if (count($result) == 0) {

    $sql =

        "INSERT INTO  tbl_cadastro (nome)
        VALUES(:cargo)";

    $novo_id = $conn->insert($sql, $_POST);
}

if (isset($novo_id)) {

    $json = ["erro" => 0, "msg" => "cadastrado com sucesso!"];
} else {

    $json = ["erro" => 1, "msg" => "Erro ao cadastrar!"];
}
