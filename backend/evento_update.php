<?php
include 'conexao.php';

$sql = "UPDATE evento SET nome_evento='Evento Atualizado' WHERE id_evento=1010";

if(mysqli_query($conn, $sql)){
    echo "Evento atualizado com sucesso!";
} else {
    echo "Erro ao atualizar: " . mysqli_error($conn);
}
?>
