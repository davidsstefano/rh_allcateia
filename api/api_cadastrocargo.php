<?php

require_once '../class/conn.php';


$conn = new ConnDb();
$controle = 0; //retorno padrao de erro.



$cargo = addslashes($_POST['cargo']);


// print_r($cargo);
// exit; 

if (isset($_POST['cargo'])) {
    


    $sql = "SELECT nome FROM tbl_cargo WHERE nome = :cargo";
    $result = $conn->select($sql, array('cargo' => $cargo));
}
    // print_r($result);
    // exit;
if (count($result) == 0) {

    $sql =

        "INSERT INTO  tbl_cargo (nome)
        VALUES(:cargo)";

    $novo_id = $conn->insert($sql, $_POST);
}

if (isset($novo_id)) {

    echo  "cadastrado com sucesso!";
    header("Location: ../public/cadastro_cargo.php");
} else {

    echo "Erro ao cadastrar!";
}
