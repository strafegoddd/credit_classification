<?php
header("Access-Control-Allow-Origin: *");
$user = 'root';
$password = 'tartar2002';
$result = '';

$dsn = 'mysql:host=my_db;dbname=loan_db;charset=utf8';
$pdo = new PDO($dsn, $user, $password);

header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем данные из тела запроса
    $data = json_decode(file_get_contents('php://input'), true);

    $crit = $data['crit'];
    $sql = "ALTER TABLE criteries ADD $crit VARCHAR(255)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo json_encode($crit);
}



