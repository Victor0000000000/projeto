<?php
// Incluir o arquivo de conexão com o banco de dados

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <script src="https://kit.fontawesome.com/d447bd80c6.js" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
  <div class="wrapper">
    <form action="salvar.php" method="POST">
        <h1>Registre-se</h1>
        <div class="input-box">
            <input type="text" name="usuario" id="usuario" placeholder="Nome" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" name="senha" id="senha" placeholder="senha" required>
            <i class="fa-solid fa-lock"></i>
        </div>
        <div class="input-box">
            <input type="email" name="email" id="email" placeholder="email" required>
            <i class="fa-solid fa-envelope"></i>
        </div>
        <div class="remember-forgot">
            
        </div>
        <button type="submit" name="submit" id="submit" class="btn">cadastrar</button>
        <div class="register-link">
            <p>Já possue uma conta? <a href="login.php">logue!</a></p>
        </div>
    </form>
  </div>  
</body>
</html>
