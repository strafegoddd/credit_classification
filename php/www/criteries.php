<?php
header("Access-Control-Allow-Origin: *");
$user = 'root';
$password = 'tartar2002';
$result = '';

$dsn = 'mysql:host=my_db;dbname=loan_db;charset=utf8';
$pdo = new PDO($dsn, $user, $password);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newCrit = $_POST["newCrit"];
		$sql = "ALTER TABLE criteries ADD $newCrit VARCHAR(255) NOT NULL";
		if ($pdo->query($sql)){
			echo $newCrit;
		}
}


