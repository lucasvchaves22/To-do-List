<?php

$hostname = 'localhost';
$database = 'to_do';
$username = 'postgres';
$password = 'Ll@ndr01d1997@';

try {
    $pdo = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>