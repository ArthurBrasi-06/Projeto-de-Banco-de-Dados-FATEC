<?php
include 'conexao.php';

$sql = "SELECT * FROM usuario";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Usuários Cadastrados</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 600px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #0078ff;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            padding: 6px 12px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-size: 14px;
        }

        .edit-btn {
            background-color: #ffaa00;
        }

        .delete-btn {
            background-color: #ff3b3b;
        }

        .add-btn {
            background-color: #0078ff;
            padding: 10px 20px;
            margin-bottom: 20px;
            display: inline-block;
        }
    </style>
</head>

<body>

    <a class="btn add-btn" href="create.php">+ Novo Usuário</a>

    <h2>Usuários Cadastrados</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id_usuario']; ?></td>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <a class="btn edit-btn" href="update.php?id=<?php echo $row['id_usuario']; ?>">Editar</a>
                <a class="btn delete-btn" href="delete.php?id=<?php echo $row['id_usuario']; ?>"
                   onclick="return confirm('Deseja realmente excluir?');">Excluir</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>
