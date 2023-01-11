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

     <!-- <form id="formlogin" method="POST" enctype="multipart/form-data"> -->
          <form action="../api/api_cadastrocargo.php" method="POST">

          <h1 class="titulo-login">Cadastro cargo</h1>
          <input type="text" name="cargo" placeholder="Nome" maxlength="40" required class="form-input">
          <input type="submit" value="Cadastrar">

     </form>

     
</body>



</html>