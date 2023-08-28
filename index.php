<?php
$host = 'mysql:host=localhost;dbname=cms';
$username = 'root';
$password = '';

try {
    $conn = new PDO($host, $username, $password);   
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
