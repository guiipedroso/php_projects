<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Atividades</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Atividades</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "conexao.php";

            $result = $conn->query("SELECT * FROM atividades");
            while ($row = $result->fetchArray()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['descricao']}</td>";
                echo "<td><a href='edicao_remocao.php?id={$row['id']}'>Editar/Remover</a></td>";
                echo "</tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>

    <br>
    <br>
    <div class="center-container">
        <a class="link" href="cadastro.php">Ir para Cadastro</a>
    </div>

</body>
</html>
