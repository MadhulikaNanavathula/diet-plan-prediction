<?php
$host = 'localhost';
$port = '5432';
$dbname = 'testdb';
$username = 'postgres';
$password = 'Nki@6015';

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $pdo = new PDO($dsn, $username, $password);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to PostgreSQL server\n";
} catch (PDOException $e) {
    echo "Error in connecting to PostgreSQL server\n";
    echo $e->getMessage();
}
?>