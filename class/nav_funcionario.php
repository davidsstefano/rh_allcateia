<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
     <script src="https://kit.fontawesome.com/5f18a24258.js" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="../css/nav.css">
     <link rel="stylesheet" href="../css/pag_funcionario.css">
     <script src="../js/funcionario.js"></script>
     <title>Funcionario</title>
</head><nav class="navbar navbar-dark bg-dark">


<div id="menu" class="container-md">
     <!-- <a class="navbar-brand">
<img src="../img/log.png" width="120" alt="" href="/public/pag_adm.php">
</a> -->

     <ul class="nav nav-pills">
          <li class="nav-item">
               <img src="../img/log.png" width="120" alt="" href="/public/pag_funcionario.php">
          </li>

          <div id="jj" class="nav nav-pills">
               <li class="nav-item">
                    <a class="nav-link" href="pag_funcionario.php">Início</a>
               </li>

               <li class="nav-item dropdown">
                    <a class="nav-link" href="../public/historico_ponto.php">Histórico de ponto</a>
                   
               </li>
          </div>
          <!-- <li class="nav-item">
<a class="nav-link disabled">Disabled</a>
</li> -->
     </ul>


     <div class="dropdown">
         

               <img id="img" src="../img/<?php
                                             foreach ($db_usuario as $output) {
                                                  echo $output['img'];
                                             }
                                             ?>" alt="Perfil" id="imagem" width="70" heigh="70" class="rounded-circle"></img>

               <p class="nome-usu">Bem vindo <?php foreach ($db_usuario as $output) {
                                   echo "<br>";
                                   echo   $output['nome'];
                                   echo " ";
                                   echo $output['sobrenome'];
                              }; ?> </p>

              
        
          
     </div>
     <li><a class="nav-link" href="../api/logout.php">Sair</a></li>
</nav>