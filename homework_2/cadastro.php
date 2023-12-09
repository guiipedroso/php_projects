<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Atividades</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro de Atividades</h1>

    <form action="processa_cadastro.php" method="post">
        Descrição: <textarea name="descricao" rows="7" cols="47" required></textarea>
        <br>
        <br>
        <input type="submit" value="Cadastrar">
    </form>

    <h2>Lista de Atividades</h2>
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
</body>
</html>
