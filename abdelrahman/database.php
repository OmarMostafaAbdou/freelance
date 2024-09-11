<?php
$dsn="mysql:host=localhost;dbname=freelancers";
$user_name  ="root";
$password ="";
try {
    $db= new PDO($dsn,$user_name,$password);
} catch (PDOException $error) {
    echo"Connetion Error".$error->getMessage();
}
function myQuery(string $sql,...$values){
    global $db;
    $stmt=$db->prepare($sql);
    $stmt->execute($values);
    return $stmt;
}