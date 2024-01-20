<?php
// conecta o banco de dados
require "conexao.php";

// login 
// inicia a sessão

ob_start();
@session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cadastro where usuario ='{$usuario}' AND senha ='{$senha}'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);

if (!empty($row)) { // se existe o usuario
    $_SESSION['id'] = $row['id']; // código do usuário
    //$_SESSION['adm'] = $row['adm'];
    header('Location:inicio.php');
}
$res = mysqli_query($conn, $sql);

if (!$res) {
    die('Erro na query: ' . mysqli_error($conn));
}


?>