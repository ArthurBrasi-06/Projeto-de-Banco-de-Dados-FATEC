<?php
include 'conexao.php';

$sql = "INSERT INTO questionario (id_questionario, id_evento, organizadores, comparacao)
        VALUES (3000, 1010, 'Org Teste', '50 Pessoas')";

if(mysqli_query($conn, $sql)){
    echo "Questionário inserido!";
} else {
    echo "Erro: " . mysqli_error($conn);
}
?>
