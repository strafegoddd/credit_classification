<?php
header("Access-Control-Allow-Origin: *");
$user = 'root';
$password = 'tartar2002';
$result = '';

$dsn = 'mysql:host=db;dbname=loan_db;charset=utf8';
$pdo = new PDO($dsn, $user, $password);


