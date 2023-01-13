<?php

require_once '../class/retorno.php';

?>

<!DOCTYPE html>
<html lang="pt-br">



<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/5f18a24258.js" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="../js/cadastro_funcionario.js"></script>
     <link rel="stylesheet" href="../css/cadastro.css">

     <title>Cadastro funcionario</title>
</head>

<body>

     <!-- <form id="formlogin" method="POST" enctype="multipart/form-data"> -->
     <form action="../api/api_cadastrousuario.php" method="POST" class="row g-3" enctype="multipart/form-data">
          <h1 class="titulo-login">Cadastro funcionario</h1>


          <div class="col-md-5">
               <label for="inputEmail4" class="form-label">Nome</label>
               <input type="nome" name="nome" class="form-control" id="inputEmail4" maxlength="40" required>
          </div>
          <div class="col-md-5">
               <label for="inputPassword4" class="form-label">Sobrenome</label>
               <input type="text" name="sobrenome" class="form-control" id="inputPassword4" maxlength="40" required>
          </div>
          <div class="col-md-5">
               <label for="inputAddress" class="form-label">email</label>
               <input type="text" name="email" class="form-control" id="inputAddress" placeholder="" maxlength="40" required>
          </div>
          <div class="col-md-5">
               <label for="inputAddress2" class="form-label">Senha</label>
               <input type="password" name="senha" class="form-control" id="inputAddress2" placeholder="" maxlength="32" required>
          </div>
          <div class="col-md-3">
               <label for="inputAddress2" class="form-label">Contato</label>
               <input type="tel" name="telefone" class="form-control" id="inputAddress2" placeholder="ex: (ddd)999999999">
          </div>
          <div class="col-5">
               <label for="inputAddress" class="form-label">CPF</label>
               <input type="text" name="cpf" class="form-control" id="inputAddress" placeholder="" maxlength="11" required>
          </div>
          <div class="col-md-2">
               <label for="inputZip" class="form-label">Data-nascimento</label>
               <input type="date" name="nascimento" class="form-control" id="inputZip" placeholder="" maxlength="12" required>
          </div>
          <div class="col-md-2">
               <label for="inputState" class="form-label">Data-admissão</label>
               <input type="date" name="admissao" class="form-control" id="inputZip" placeholder="" maxlength="12" required>
          </div>

          <div class="col-md-2">
               <label for="inputState" class="form-label">Cargo</label>
               <select name="cargo" id="inputState" class="form-select" required>
                    <option value="0" selected disabled>Selecione o Cargo:</option>

                    <?php
                    foreach ($db_cargo as $output) {
                         echo '<option value="' . $output['id_cargo'] . '">' . $output['nome'] . '</option>';
                    }
                    ?>
               </select>
          </div>
          <div class="col-md-3">
               <label for="cep" class="form-label">CEP</label>
               <input type="text" name="cep" class="form-control" placeholder="CEP" id="cep" onblur="pesquisacep(this.value);" maxlength="40" required class="form-input">
          </div>
          <div class="col-md-5">
               <label for="uf" class="form-label">Estado</label>
               <input type="text" name="estado" class="form-control" placeholder="Estado" id="uf" maxlength="40" required>
          </div>
          <div class="col-md-4">
               <label for="cidade" class="form-label">Cidade</label>
               <input type="text" name="cidade" class="form-control" placeholder="Cidade" maxlength="40" id="cidade" required>
          </div>

          <div class="col-md-5">
               <label for="bairro" class="form-label">Bairro</label>
               <input type="text" class="form-control" name="bairro" placeholder="Bairro" maxlength="40" id="bairro" required>
          </div>
          <div class="col-md-4">
               <label for="endereco" class="form-label">Endereço</label>
               <input type="text" class="form-control" name="endereco" placeholder="Endereço" maxlength="40" id="endereco" required>
          </div>
          <div class="col-md-1">
               <label for="inputZip" class="form-label">Número</label>
               <input type="text" class="form-control" name="numero" placeholder="Numero" maxlength="5" required id="inputZip">
          </div>
          <div>

               <div class="col" id="status">
                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="categoria" id="inlineCheckbox1" value="1">
                         <label class="form-check-label" for="inlineCheckbox1">Administrador</label>
                    </div>

                    <div class="form-check form-check-inline">
                         <input class="form-check-input" type="radio" name="categoria" id="inlineCheckbox2" value="2">
                         <label class="form-check-label" for="inlineCheckbox2">Colaborador</label>
                    </div>
               </div>

          </div>

          <div>
               <label for="img">Insira sua o foto: </label>
               <input type="file" name="img" placeholder="img" maxlength="45" required class="form-input">
          </div>

          <div class="col-12">
               <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>


     </form>

</body>



</html>