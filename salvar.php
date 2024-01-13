<?php 

//conecta com o banco de dados
require "conexao.php";

//dados são salvos pelo metodo de post;

//formulário de cadastro de usuário
	$nome = $_POST['usuario'];
    $senha = $_POST['senha'];
	$email = $_POST['email'];
	

	
	
	

		$sql = "INSERT INTO cadastro (usuario, senha, email) values ('$usuario',  '$senha', '$email')"; 

mysqli_query($conn, $sql); // envia para o banco de dados
?>"<script type='text/javascript'>alert('Usuário cadastrado!');</script>";
<?php header('location: inicio.php');

?>