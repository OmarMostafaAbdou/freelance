<?php
//?open connection/get resulte
include_once("../database.php");
include_once("../../../login/HTML/includes/config_session.inc.php");

//! function for getting all data
function getUser(): array
{
    global $db;
    $sql = "select * from users where id=? ";
    $stmt = restP($sql, 1);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;

}

//!function for store data in database
function inserPost($data)
{
    global $db;

    $sql = "insert into  search_for_service(price,description,service_id,user_id) values(?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$data['price'], $data['description'], $data['service_id'], $_SESSION["user_id"]]);
    header('location:index.php');


}
//!function for geting post
function getPost()
{
    global $db;
    $sql = "select search_for_service.price ,search_for_service.description ,services.name as service_id from search_for_service left join services
    on
    search_for_service.service_id = services.id where search_for_service.user_id=?";
    $stmt = restP($sql, $_SESSION['user_id']);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//!function for geting service
function getService()
{
    global $db;
    $sql = "select * from services ";
    $stmt = restP($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//!function for catching users by id

function getUserById(int $id): array
{
    global $db;
    $id = 1;
    $sql = "select * from users where id =?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}


?>