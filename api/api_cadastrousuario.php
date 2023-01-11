<?php

require_once '../class/conn.php';


$conn = new ConnDb();
$controle = 0; //retorno padrao de erro.


$nome = addslashes($_POST['nome']);
$sobrenome = addslashes($_POST['sobrenome']);
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);
$telefone = addslashes($_POST['telefone']);
$cpf = addslashes($_POST['cpf']);
$nascimento = addslashes($_POST['nascimento']);
$admissao = addslashes($_POST['admissao']);
$cargo = addslashes($_POST['cargo']);
$categoria = addslashes($_POST['categoria']);
$cep = addslashes($_POST['cep']);
$estado = addslashes($_POST['estado']);
$cidade = addslashes($_POST['cidade']);
$bairro = addslashes($_POST['bairro']);
$endereco = addslashes($_POST['endereco']);
$numero = addslashes($_POST['categoria']);


var_dump($_POST);



// if (isset($_POST['cargo']))