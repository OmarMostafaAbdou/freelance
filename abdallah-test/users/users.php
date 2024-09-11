<?php
//?open connection/get resulte
require_once(__DIR__ . '/../../../rokaya-landing/login/HTML/includes/config_session.inc.php');
include_once("../database.php");

//! function for getting all data
function getUser(): array
{
    global $db;
    $sql = "select * from users where id=? ";
    $stmt = restP($sql, $_SESSION['user_id']);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;

}
//////////////////////////////////////////////////محاولة فاشلة
// function getAllUsers($role): array
// {
//     global $db;
//     $sql = "select * from users where role=?";

//     $result = restP($sql, $role)->fetchAll(PDO::FETCH_ASSOC);
//     return $result;

// }
//////////////////////////////////////////////////محاولة فاشلة تاني
//!function for searching
function search($role): array
{
    global $db;
    $role = $_SESSION['user_role'];
    $sql = "select * from users where role=?";


    $result = restP($sql, $role)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

//!function for store data in database
function inserPost($data)
{
    global $db;

    $sql = "insert into  search_for_service(price,description,service_id,user_id) values(?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$data['price'], $data['description'], $data['service_id'], $_SESSION['user_id']]);
    header('location:index.php');


}
//!function for geting post
function getPost()
{
    global $db;
    $sql = "select search_for_service.price ,search_for_service.description ,services.name as service_id from search_for_service left join services
    on
    search_for_service.service_id = services.id where search_for_service.user_id=?";
    $stmt = restP($sql,$_SESSION['user_id']);
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
//!function for editing/update items
function editUserInfo($data, $files)
{
    global $db;
    $sql = "update users set name=?,birthday=?,role=?, password=?,img=? where id=?";
    $stmt = $db->prepare($sql);
    $ext = pathinfo($files['image']['name'], PATHINFO_EXTENSION);

    if (!empty($_FILES)) {
        $img = md5(microtime()) . "." . $ext;
        move_uploaded_file($files['image']['tmp_name'], "../images/$img");
    } else {
        $img = $data['image'];
    }
    $stmt->execute([$data['name'], $data['birthday'], 'Client', $data['password'], $img, $_SESSION['user_id']]);
    header('location:index.php');
}
//!function for catching users by id

function getUserById(int $id): array
{
    global $db;
    $id=$_SESSION['user_id'];
    $sql = "select * from users where id =?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

?>