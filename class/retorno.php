<?php
require_once '../class/conn.php';

$conn = new ConnDb();




session_start();
$id_usuario = (isset($_SESSION['id_usuario'])) ? $_SESSION['id_usuario'] : null;
if (!isset($_SESSION['id_usuario'])) {
    session_destroy(header("location: login.php"));

    exit;
}


$sql = "SELECT * FROM  tbl_cargo";
$db_cargo = $conn->select($sql, []);


$sql = "SELECT nome,sobrenome,img FROM  tbl_usuario where id_usuario = $_SESSION[id_usuario]";
$db_usuario = $conn->select($sql, []);






?>