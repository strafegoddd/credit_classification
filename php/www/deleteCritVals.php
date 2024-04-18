<?php
header("Access-Control-Allow-Origin: *");
$user = 'root';
$password = 'tartar2002';
$result = '';

$dsn = 'mysql:host=my_db;dbname=loan_db;charset=utf8';
$pdo = new PDO($dsn, $user, $password);

header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $tableName = 'criteries';
    $columnName = $data['column'];
    $valueToDelete = $data['text'];

    // Получаем текущие значения ENUM
    $sqlValues = "SHOW COLUMNS FROM $tableName LIKE '$columnName'";
    $stmt = $pdo->query($sqlValues);
    $columnInfo = $stmt->fetch(PDO::FETCH_ASSOC);

    // Парсим ENUM значения
    preg_match("/^enum\(\'(.*)\'\)$/", $columnInfo['Type'], $matches);
    $enumValues = explode("','", $matches[1]);

    // Удаляем указанное значение из массива ENUM значений
    $key = array_search($valueToDelete, $enumValues);
    if ($key !== false) {
        unset($enumValues[$key]);
    }

    // Формируем строку ENUM значений для SQL запроса
    $enumString = implode("','", $enumValues);

    // SQL запрос для удаления значения из ENUM
    $sql = "ALTER TABLE $tableName MODIFY COLUMN $columnName ENUM('$enumString') NOT NULL";
    $pdo->exec($sql);
}