<?php
header("Access-Control-Allow-Origin: *");
$user = 'root';
$password = 'tartar2002';
$result = '';

$dsn = 'mysql:host=my_db;dbname=loan_db;charset=utf8';
$pdo = new PDO($dsn, $user, $password);

if($ans = $pdo->query("SELECT * FROM `criteries`")){
    foreach($ans as $row){
        $new[] = $row;
    }
}
//print_r($new);
echo json_encode($new);

