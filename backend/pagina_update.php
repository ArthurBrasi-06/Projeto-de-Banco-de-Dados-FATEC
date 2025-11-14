<?php
include 'conexao.php';

$sql = "UPDATE pagina_do_evento SET peculiaridades='Atualizado via script' WHERE id_evento=1010";

if(mysqli_query($conn, $sql)){
    echo "Página do evento atualizada!";
} else {
    echo "Erro: " . mysqli_error($conn);
}
?>
