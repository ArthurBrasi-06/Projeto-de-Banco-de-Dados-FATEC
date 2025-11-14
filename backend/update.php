<?php
include 'conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM usuario WHERE id_usuario = $id";
$result = mysqli_query($conn, $sql);
$usuario = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sqlUpdate = "UPDATE usuario SET nome='$nome', email='$email' WHERE id_usuario=$id";
    mysqli_query($conn, $sqlUpdate);

    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuário</title>

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
            background-color: #ffaa00;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        button:hover {
            background-color: #e69900;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Editar Usuário</h2>

        <form method="POST">
            Nome:
            <input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required>

            Email:
            <input type="email" name="email" value="<?php echo $usuario['email']; ?>" required>

            <button type="submit" name="submit">Salvar</button>
        </form>
    </div>
</body>
</html>
