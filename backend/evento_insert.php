<?php
include 'conexao.php';

$sql = "INSERT INTO evento (id_evento, id_usuario, nome_evento) 
        VALUES (2025, 1, 'Evento Demonstracao')";

if(mysqli_query($conn, $sql)){
    echo "Evento inserido com sucesso!";
} else {
    echo "Erro ao inserir evento: " . mysqli_error($conn);
}
?>
