<?php
require_once 'Database.php';

$database = new Database();
$db = $database->getConnection();

if ($db) {
    echo "Conexão com o banco de dados estabelecida com sucesso!";
} else {
    die("Falha ao conectar ao banco de dados.");
}

echo '<br>Dados:<br>';

$data = $db->query('SELECT * FROM users');

foreach ($data as $row) {
    echo $row['id'] . ' - ' . $row['name'] . '<br>';
}
