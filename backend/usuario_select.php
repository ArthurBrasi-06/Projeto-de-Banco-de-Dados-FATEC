<?php
include("conexao.php");

$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

echo "<h1>Usuários cadastrados</h1><br>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id_usuario"] .
             " - Nome: " . $row["nome"] .
             " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "Nenhum usuário encontrado.";
}

$conn->close();
?>
