<?php
include 'conexao.php';

$sql = "UPDATE questionario SET comparacao='Atualizado via script' WHERE id_questionario=2000";

if(mysqli_query($conn, $sql)){
    echo "Questionário atualizado!";
} else {
    echo "Erro: " . mysqli_error($conn);
}
?>
