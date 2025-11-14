<?php
include 'conexao.php';

$sql = "INSERT INTO pagina_do_evento (id_evento, peculiaridades, dados_hora, localizacao)
        VALUES (2025, 'Teste', NOW(), 'Rua Teste, 123')";

if(mysqli_query($conn, $sql)){
    echo "Página inserida!";
} else {
    echo "Erro: " . mysqli_error($conn);
}
?>
