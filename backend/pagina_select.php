<?php
include 'conexao.php';

$sql = "SELECT * FROM pagina_do_evento";
$result = mysqli_query($conn, $sql);

echo "<h2>LISTAGEM DE PÁGINAS DO EVENTO</h2>";

while($row = mysqli_fetch_assoc($result)){
    echo "ID Evento: " . $row['id_evento'] .
         " | Peculiaridades: " . $row['peculiaridades'] .
         " | Localização: " . $row['localizacao'] . "<br>";
}
?>
