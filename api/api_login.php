<?php

require_once '../class/conn.php';


$conn = new ConnDb();
$controle = 0; //retorno padrao de erro.

$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);



if (isset($_POST['email'])) {
    // print_r($senha);
    // exit;  


    $sql = "SELECT  id_usuario ,email , senha, categoria FROM tbl_usuario WHERE email = :email AND senha = :senha";
    $result = $conn->select($sql, array('email' => $email, 'senha' => $senha));

//     print_r($result[0]['categoria']);
//     exit;
    if (count($result) == 1) {


        $id = $result[0]['id_usuario']; //id retorno token.

        session_start();
        $_SESSION['id_usuario'] = $id;
        if ($result[0]['categoria'] == '1') {
            $controle = 1;
        } elseif ($result[0]['categoria'] == '2') {
            $controle = 2; //retorno de sucesso de usuario.
        }
    } else {
        $controle = 3;

        
    }
}

header('Content-Type: application/json; charset=utf-8');

echo '{"controle":' . $controle . '}';
