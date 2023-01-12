

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
     <link rel="stylesheet" href="../css/style.css">
     <title>Document</title>
</head>

<body>
     <div class="container text-center">
          <div class="row">
               <form class="col align-self-center" id="formlogin" method="POST" enctype="multipart/form-data">
                    <!-- <form action="../api/api_login.php" method="POST">  -->
                    <h1 class="titulo-login">Login</h1>

                    <div id="gg" class="form-floating mb-3">
                         <input class="form-control caixa-texto-login " type="email" name="email" placeholder="E-mail" maxlength="40" required class="form-input">
                         <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                         <input class="form-control caixa-texto-login " type="password" name="senha" placeholder="Senha" maxlength="32" required class="form-input">
                         <label for="floatingInput">Senha</label>
                    </div>
                    <div id="botao-entrar" class="d-grid gap-2 col-6 mx-auto">
                         <input class="btn btn-primary" type="submit" value="Entrar">
                    </div>
               </form>
               <a href="recupera.php">
                    <p class="recuperar-senha">Esqueceu sua Senha?</p>
               </a>
          </div>

     </div>
</body>



</html>