<?php 


$dsn = "mysql:host=localhost;dbname=freelancers";
$dbusername = "root";
$dbpassword = "";


try {
    $db = new PDO($dsn ,$dbusername,$dbpassword);
    $db-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo 'coniction succsed';
} catch (PDOException $e) {
    echo "conection failed :" .$e->getMessage();
}







