<?php

require_once '../class/retorno.php';

?>

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

     <title>ADM</title>
</head>

<body>

     <h1>Ola <?php foreach ($db_usuario as $output) {
                    echo   $output['nome'];
                    echo " ";
                    echo $output['sobrenome'];
                    echo "<br>";
               }; ?> </h1>
     <img src="../img/<?php foreach ($db_usuario as $output) {

                              echo $output['img'];
                         } ?>" alt="Imagem-Usuario">
     <button type="button" class="btn btn-danger"><a href="../api/logout.php" class="link-light">Sair</a></button>
     <a href="cadastro_funcionario.php">Cadastro de funcionario</a>
     <a href="cadastro_cargo.php">Cadastro cargo</a>

</body>

</html>