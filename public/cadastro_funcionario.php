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
     <script src="../js/login.js"></script>

     <title>Cadastro funcionario</title>
</head>

<body>

     <form id="formlogin" method="POST" enctype="multipart/form-data">

          <h1 class="titulo-login">Cadastro funcionario</h1>


          <input type="text" name="nome" placeholder="Nome" maxlength="40" required class="form-input">
          <input type="text" name="sobrenome" placeholder="Sobrenome" maxlength="40" required class="form-input">
          <input type="email" name="email" placeholder="E-mail" maxlength="40" required class="form-input">
          <input type="password" name="senha" placeholder="Senha" maxlength="32" required class="form-input">
          <input type="tel" name="telefone" placeholder="Telefone" maxlength="40" required class="form-input">
          <input type="text" name="cpf" placeholder="CPF" maxlength="40" required class="form-input">
          <input type="date" name="nascimento" placeholder="Data-nascimento" maxlength="40" required class="form-input">
          <input type="date" name="admissao" placeholder="Data-admissão" maxlength="40" required class="form-input">
          <input type="text" name="cargo" placeholder="Cargo" maxlength="40" required class="form-input">
          <select name="categoria">
               <option value="1">Administrador</option>
               <option value="1">Funcionario</option>
          </select>
          <input type="submit" value="Entrar">

     </form>

     </div>

     </div>
</body>



</html>