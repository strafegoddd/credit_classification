<?php
header("Access-Control-Allow-Origin: *");
$user = 'root';
$password = 'tartar2002';
$result = '';

$dsn = 'mysql:host=my_db;dbname=loan_db;charset=utf8';
$pdo = new PDO($dsn, $user, $password);

$tableName = 'criteries';
$stmt = $pdo->query("DESCRIBE $tableName");
$columns = $stmt->fetchAll(PDO::FETCH_COLUMN);

foreach ($columns as $column) {
    $new[] = $column;
}

echo json_encode($new);