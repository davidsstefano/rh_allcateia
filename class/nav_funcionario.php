<nav class="navbar navbar-dark bg-dark">


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
     <li><a class="nav-link" href="../public/logout.php">Sair</a></li>
</nav>