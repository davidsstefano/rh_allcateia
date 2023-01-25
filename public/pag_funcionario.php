<?php

require_once '../class/retorno.php';
require_once '../class/data_hora.php';
require_once '../class/nav_funcionario.php';

?>

<link rel="stylesheet" href="../css/pag_funcionario.css">

<body>

     <div class="body-form">
          <form id="enviar_ponto" class="col align-self-center">

               <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $_SESSION['id_usuario']; ?>" />



          </form>


     </div>
     <a href="../api/api_teste.php">aqui</a>
     <div class="d-grid gap-2">
          <button class="btn btn-primary" onclick="fncenviar_ponto()">Registrar Ponto</button>

     </div>

     <table class="table table-striped">
          <thead>
               <tr>
                    <th class="col-2">Entrada</th>
                    <th class="col-2"></th>
                    <th class="col-2">Saido-Almoço</th>
                    <th class="col-2"></th>
                    <th class="col-2">Retorno-Almoço</th>
                    <th class="col-2"></th>
                    <th class="col-2">Saida</th>
               </tr>
          </thead>
     </table>
     <div id="divhorario"></div>
     <table class="table table-striped">
          <thead>
               <tr>
                    <th class="col-2"></th>
                    <th class="col-2"></th>
                    <th class="col-2"></th>
                    <th class="col-2">Intervalo</th>
                    <th class="col-2"></th>
                    <th class="col-2"></th>
                    <th class="col-2"></th>
               </tr>
          </thead>
     </table>
     <div id="divintervalo"></div>



</body>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->

</html>