<?php
include 'conexao.php';

$sql = "SELECT * FROM questionario";
$result = mysqli_query($conn, $sql);

echo "<h2>LISTAGEM DE QUESTIONÁRIOS</h2>";

while($row = mysqli_fetch_assoc($result)){
    echo "ID: " . $row['id_questionario'] . 
         " | Evento: " . $row['id_evento'] .
         " | Organizadores: " . $row['organizadores'] .
         " | Comparação: " . $row['comparacao'] . "<br>";
}
?>
