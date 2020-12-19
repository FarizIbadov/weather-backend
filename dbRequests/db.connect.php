<?php
    // ini_set('display_errors', 1);

    $host = "mysql-fariz.alwaysdata.net";
    $user = "fariz";
    $password = "3151936Fz";
    $db = "fariz_weather";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "PDO Error : Code " . $e->getCode() . " ,Expectation Msg : " . $e->getMessage() . "<br>";
        exit();
    }
?>