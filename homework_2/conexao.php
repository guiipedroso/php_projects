<?php
$databaseFile = "atividades.db";

$conn = new SQLite3($databaseFile);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . $conn->lastErrorMsg());
}

$query = "CREATE TABLE IF NOT EXISTS atividades (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    descricao TEXT NOT NULL,
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP
)";

$conn->exec($query);
?>
