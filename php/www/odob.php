<?php
header("Access-Control-Allow-Origin: *");
$user = 'root';
$password = 'tartar2002';
$result = '';

$dsn = 'mysql:host=my_db;dbname=loan_db;charset=utf8';
$pdo = new PDO($dsn, $user, $password);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем данные из тела запроса
    $data = json_decode(file_get_contents('php://input'), true);

    $tableName = 'criteries';
    $columnName = $data['val'];

// SQL запрос для получения ENUM значений
    $sql = "SHOW COLUMNS FROM $tableName LIKE '$columnName'";
    $stmt = $pdo->query($sql);
    $columnInfo = $stmt->fetch(PDO::FETCH_ASSOC);

// Парсим ENUM значения
    preg_match("/^enum\(\'(.*)\'\)$/", $columnInfo['Type'], $matches);
    $enumValues = explode("','", $matches[1]);

    foreach ($enumValues as $value) {
        $new[] = $value;
    }

    echo json_encode($new);
}