<?php
include "conexao.php";

$descricao = $_POST['descricao'];
$data_criacao = date('Y-m-d H:i:s');

$sql = "INSERT INTO atividades (descricao, data_criacao) VALUES ('$descricao', '$data_criacao')";

if ($conn->exec($sql)) {
    header("Location: cadastro.php");
} else {
    echo "Erro ao cadastrar atividade: " . $conn->lastErrorMsg();
}

$conn->close();
?>
