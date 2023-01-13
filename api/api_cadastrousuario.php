<?php

require_once '../class/conn.php';
require_once '../functions/carregar_foto.php';


// echo($nomeArquivo);

     $conn = new ConnDb();
     $controle = 0; //retorno padrao de erro.

     if (isset($_POST['cpf'])) {


         
          

       
   

     $nome = addslashes($_POST['nome']);
     $sobrenome = addslashes($_POST['sobrenome']);
     $email = addslashes($_POST['email']);
     $senha = addslashes($_POST['senha']);
     $telefone = addslashes($_POST['telefone']);
     $cpf = addslashes($_POST['cpf']);
     $nascimento = addslashes($_POST['nascimento']);
     $admissao = addslashes($_POST['admissao']);
     $cargo = addslashes($_POST['cargo']);
     $cep = addslashes($_POST['cep']);
     $estado = addslashes($_POST['estado']);
     $cidade = addslashes($_POST['cidade']);
     $bairro = addslashes($_POST['bairro']);
     $endereco = addslashes($_POST['endereco']);
     $numero = addslashes($_POST['numero']);
     $categoria = addslashes($_POST['categoria']);
     $img = $nomeArquivo;

     // var_dump($nomeArquivo);

     // exit;


     // $sql = "SELECT cpf,email FROM tbl_usuario WHERE cpf = :cpf OR email = :email";
     // $result = $conn->select($sql, array('cpf' => $cpf, 'email' => $email));


     $sql = "INSERT INTO  tbl_usuario (nome,sobrenome,email,senha,telefone,cpf,nascimento,admissao,cargo,cep,estado,cidade,bairro,endereco,numero,categoria,img)
          VALUES(:nome,:sobrenome,:email,:senha,:telefone,:cpf,:nascimento,:admissao,:cargo,:cep,:estado,:cidade,:bairro,:endereco,:numero,:categoria,:img)";

     $novo_id = $conn->insert($sql, array(
          'nome' => $nome, 'sobrenome' => $sobrenome, 'email' => $email,
          'senha' => $senha, 'telefone' => $telefone, 'cpf' => $cpf, 'nascimento' => $nascimento, 'admissao' => $admissao,
          'cargo' => $cargo, 'cep' => $cep, 'estado' => $estado, 'cidade' => $cidade, 'bairro' => $bairro,
          'endereco' => $endereco, 'numero' => $numero, 'categoria' => $categoria, 'img' => $img
     ));
}

if (isset($novo_id)) {

     echo  "cadastrado com sucesso!";
     header("Location: ../public/cadastro_funcionario.php");
} else {

     echo "Erro ao cadastrar!";
}
