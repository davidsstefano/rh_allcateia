<?php

require_once '../class/retorno.php';
require_once '../class/data_hora.php';
require_once '../class/nav_funcionario.php';




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
     <link rel="stylesheet" href="../css/nav.css">
     <link rel="stylesheet" href="../css/pag_funcionario.css">
     <script src="../js/funcionario.js"></script>
     <title>ADM</title>
</head>

<body>

     <div class="body-form">
          <form id="enviar_ponto" class="col align-self-center">
               <div id="gg" class="form-floating mb-3">
                    <p class="mx-auto" style="width: 80px;"><?php print_r($exibir_data) ?></p>

               </div>
               <div id="gg" class="form-floating mb-3">
                    <p class="mx-auto" style="width: 40px;"><?php print_r($hora) ?></p>

               </div>
               <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $_SESSION['id_usuario']; ?>" />



          </form>


     </div>
     <div class="d-grid gap-2">
     <button class="btn btn-primary" onclick="fncenviar_ponto()">Registrar Ponto</button>
         
     </div>
     
     <table class="table table-striped">
          <thead>
               <tr>
                    <th class="col-2">Data</th>
                    <th class="col-2">Entrada</th>
                    <th class="col-2"></th>
                    <th class="col-2">Intervato</th>
                    <th class="col-2"></th>
                    <th class="col-2">Saida</th>


               </tr>
          </thead>
     </table>
     <div id="divhorario"></div>



</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->

</html>