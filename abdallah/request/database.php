<?php
//create a layer to make connection PDO layer 
$dsn = "mysql:host=localhost;dbname=freelancers";
$userName = "root";
$password = "";
try {
    $db = new PDO($dsn, $userName, $password);
} catch (PDOException $e) {
    echo "Connection Error: " . $e->getMessage();
}

function restP(string $sql, ...$values)
{

    global $db;
    $stmt = $db->prepare($sql);
    $stmt->execute($values);
    return $stmt;
}
function closeConnection($stmt)
{
    global $db;
    $db = null;
    $stmt = null;
}

?>