<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT id, senha FROM usuario WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashedPassword);
        $stmt->fetch();

        if (password_verify($senha, $hashedPassword)) {
            $_SESSION['id'] = $id;
            header("Location: menu.php?");
            exit();
        } else {
            echo "<script>alert('Senha incorreta!');</script>";
        }
    } else {
        echo "<script>alert('Usuário não encontrado!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
    <h2 class="title">Login</h2>
    <form method="POST">
        <div class="group">
            <input type="email" name="email" required>
            <label>Email</label>
        </div>
        <div class="group">
            <input type="password" name="senha" required>
            <label>Senha</label>
        </div>
        <button type="submit">Entrar</button>
    </form>
    </div>
</body>
<style>
    body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
        margin: 0;
        display: flex;
        justify-content: center;
    }
    .container{
        margin-top: 100px;
        border-bottom: 2px solid #ccc;
        border-right: 2px solid #ccc;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: white;
        text-align: center;
    }
    .title{
        margin-bottom: 20px;
        font-family: Arial, sans-serif;
        color: #444;
        text-align: center;
    }
    .group{
        position: relative;
        margin: 45px 0;
    }
    input{
        font-size: 18px;
        padding: 10px 10px 10px 5px;
        display: block;
        width: 300px;
        border: none;
        border-bottom: 1px solid #757575;
        background: transparent;
    }
    label{
        position: absolute;
        left: 5px;
        top: 10px;
        transition: 0.2s ease all;
        color: #999;
    }
    input:focus~label, input:valid~label{
        top: -20px;
        font-size: 14px;
        color: #5264AE;
    }
    input:focus{
        outline: none;
        border-bottom: 2px solid #5264AE;
    }
    button{
        background-color: #5264AE;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 4px;
        transition: background-color 0.3s ease;
        width: 100px;
    }
    button:hover{
        background-color: #3957A3;
    }

</style>
</html>
