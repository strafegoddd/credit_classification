<?php
header("Access-Control-Allow-Origin: *");
$user = 'root';
$password = 'tartar2002';
$result = '';

$dsn = 'mysql:host=my_db;dbname=loan_db;charset=utf8';
$pdo = new PDO($dsn, $user, $password);

$tableName = 'criteries';
header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $columnName = $data['text'];
    $sql = "ALTER TABLE $tableName DROP COLUMN $columnName";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo json_encode("Столбец $columnName был успешно удален из таблицы $tableName.");
}