<?php

require_once '../class/retorno.php';
require_once '../class/data_hora.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ADM</title>
</head>

<body>
     <h1>Ola</h1>

     <form action="../api/api_registrarponto.php" method="POST">

          <input type="hidden" name="id_usuario" value="<?php echo $_SESSION['id_usuario']; ?>" />
          <input type="submit" nome="cadastrar" value="registrar ponto" class="form-btn">

     </form>


</body>

</html>