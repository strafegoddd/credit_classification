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

    $tableName = 'statuses';
    $columnName = 'status';
    $newValue = $data['stat'];

    // Получаем текущие значения ENUM
    $sqlValues = "SHOW COLUMNS FROM $tableName LIKE '$columnName'";
    $stmt = $pdo->query($sqlValues);
    $columnInfo = $stmt->fetch(PDO::FETCH_ASSOC);

    // Парсим ENUM значения
    preg_match("/^enum\(\'(.*)\'\)$/", $columnInfo['Type'], $matches);
    $enumValues = explode("','", $matches[1]);

    // Добавляем новое значение в массив ENUM значений
    $enumValues[] = $newValue;

    // Формируем строку ENUM значений для SQL запроса
    $enumString = implode("','", $enumValues);

    // SQL запрос для добавления нового значения к ENUM
    $sql = "ALTER TABLE $tableName MODIFY COLUMN $columnName ENUM('$enumString') NOT NULL";
    $pdo->exec($sql);

    echo json_encode($newValue);
}