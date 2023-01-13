<?php

if ($_FILES && $_FILES['img']) {
    $pastaUpload = '../img/';
    $nomeArquivo = $_FILES['img']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['img']['tmp_name'];


    // echo($nomeArquivo);

    if (move_uploaded_file($tmp, $arquivo)) {

        echo "Arquivo enviado com sucesso.";
    } else {
        echo "erro no upload.";
    }
}
