<?php
include 'conexao.php';

$sql = "SELECT * FROM evento";
$result = mysqli_query($conn, $sql);

echo "<h2>LISTAGEM DE EVENTOS</h2>";

while($row = mysqli_fetch_assoc($result)){
    echo "ID Evento: " . $row['id_evento'] . " | Nome: " . $row['nome_evento'] . "<br>";
}
?>
