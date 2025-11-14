<?php
include 'conexao.php';

if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO usuario (nome, email) VALUES ('$nome', '$email')";
    mysqli_query($conn, $sql);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Usuário</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 15px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #0078ff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        button:hover {
            background-color: #005fcc;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Cadastrar Usuário</h2>

        <form method="POST">
            Nome:
            <input type="text" name="nome" required>

            Email:
            <input type="email" name="email" required>

            <button type="submit" name="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
