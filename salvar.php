<?php
// Conecta com o banco de dados
require "conexao.php";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    // Prepara a query SQL usando prepared statement
    $sql = "INSERT INTO cadastro (usuario, senha, email) VALUES ('usuario', 'senha', 'email')";
    
    // Inicializa uma declaração preparada
    $stmt = mysqli_prepare($conn, $sql);

    // Verifica se a preparação da declaração foi bem-sucedida
    if ($stmt) {
        // Vincula os parâmetros
        mysqli_stmt_bind_param($stmt, "sss", $usuario, $senha, $email);

        // Executa a declaração
        mysqli_stmt_execute($stmt);

        // Fecha a declaração preparada
        mysqli_stmt_close($stmt);

        // Redireciona para a página de início após o cadastro bem-sucedido
        header('Location: inicio.php');
        exit();
    } else {
        // Se houver um erro na preparação da declaração, imprime o erro
        echo "Erro na preparação da declaração: " . mysqli_error($conn);
    }
} else {
    // Se o formulário não foi enviado, redireciona para a página de início
    header('Location: inicio.php');
    exit();
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
