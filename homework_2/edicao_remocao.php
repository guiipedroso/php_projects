<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar/Remover Atividade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Editar/Remover Atividade</h1>

    <?php
    include "conexao.php";

    $id = $_GET['id'];

    $result = $conn->query("SELECT * FROM atividades WHERE id = $id");
    $row = $result->fetchArray();
    ?>

    <form action="processa_edicao_remocao.php" method="post">
        ID: <input type="text" name="id" value="<?php echo $row['id']; ?>" readonly>
        <br><br>
        Descrição: <br>
        <textarea name="descricao" cols="47" rows="5" required><?php echo $row['descricao']; ?></textarea>
        <br><br>
        <input type="submit" name="editar" value="Editar">
        <input type="submit" name="remover" value="Remover">
    </form>

    <div class="center-container">
        <a class="button" href="cadastro.php">Voltar para a lista</a>
    </div>

</body>
</html>
