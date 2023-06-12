<?php
$host = 'postgres';
$port = '5432';
$dbname = 'help_desk';
$user = 'postgres';
$password = 'postgresweb';

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];

try {
    $pdo = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die("Não foi possível se conectar ao banco de dados: " . $e->getMessage());
}

?>