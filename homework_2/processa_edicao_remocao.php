<?php
include "conexao.php";

if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $descricao = $_POST['descricao'];

    $sql = "UPDATE atividades SET descricao='$descricao' WHERE id=$id";

    if ($conn->exec($sql)) {
        header("Location: index.php");
    } else {
        echo "Erro ao editar atividade.";
    }
} elseif (isset($_POST['remover'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM atividades WHERE id=$id";

    if ($conn->exec($sql)) {
        header("Location: index.php");
    } else {
        echo "Erro ao remover atividade.";
    }
}

$conn->close();
?>
