<?php
header("Access-Control-Allow-Origin: *");
//$user = 'root';
//$password = 'password';
$result = '';
//
//$dsn = 'mysql:host=db;dbname=calorize_db;charset=utf8';
//$pdo = new PDO($dsn, $user, $password);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $family = $_POST["family"];
    $dependent = $_POST["dependent"];
    $education = $_POST["education"];
    $employment = $_POST["employment"];
    $applicantIncome = $_POST["applicantIncome"];
    $coapplicantIncome = $_POST["coapplicantIncome"];
    $loanAmount = $_POST["loanAmount"];
    $term  = $_POST["term"];
    $creditHistory = $_POST["creditHistory"];
    $area = $_POST["area"];

    // Выполнение вычислений или других операций с данными\
    if ($creditHistory == 'bad'){
        $result = "Не одобрен";
    }
    else {
        if ($employment == 'notJob'){
            if ($family == 'merried' && $education == 'education'){
                if ($applicantIncome+$coapplicantIncome <= $loanAmount/$term*39){
                    $result = "Не одобрен";
                }
                else{
                    $result = "Одобрен";
                }
            }
            else{
                if ($dependent == 'dependent'){
                    if ($applicantIncome+$coapplicantIncome <= $loanAmount/$term*39){
                        $result = "Не одобрен";
                    }
                    else{
                        $result = "Одобрен";
                    }
                }
                else{
                    $result = "Не одобрен";
                }
            }
        }
        else{
                if ($family == 'merried' || $dependent == 'dependent'){
                    if ($applicantIncome+$coapplicantIncome <= $loanAmount/$term*39){
                        $result = "Не одобрен";
                    }
                    else{
                        $result = "Одобрен";
                    }
                }
                else{
                    if ($applicantIncome <= $loanAmount/$term*39){
                        $result = "Не одобрен";
                    }
                    else{
                        $result = "Одобрен";
                    }
                }

            }
        }

    // Возвращение результата
    echo $result;
}