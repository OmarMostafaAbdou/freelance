<?php
require_once(__DIR__ . '/../login/HTML/includes/config_session.inc.php');
include_once("connection.php");
function add($data, $files)
{


    $sql = "insert into jobs(description,price,job_user_id,job_service_id,title,job_date) values(?,?,?,?,?,?)";


    myQuary($sql, $data["description"], $data["price"], $_SESSION['user_id'], $data["services"], $data["jobname"], date("Y-m-d h:i:s"));
    global $db;
    $id = $db->lastInsertId();

    for ($i = 0; $i < count($files["img"]['name']); $i++) {
        $img_name = $files["img"]['name'][$i];
        $img = md5(microtime()) . "." . pathinfo($img_name, PATHINFO_EXTENSION);
        move_uploaded_file($files["img"]["tmp_name"][$i], "pics/" . $img);
        $stmt = $db->prepare("insert into job_imgs(job_id,imgs) values(?,?)");
        $stmt->execute([$id, $img]);
    }
}
function getAllservices()
{
    $sql = "select * from services";
    $data = myQuary($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getbyid($id)
{
    $sql = "select * from jobs where id=?";
    $data = myQuary($sql, $id)->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function update($data, $files)
{
    $sql = "update jobs set description=?,price=?,job_user_id=?,job_service_id=?,title=?,job_date=? where id =?";


    myQuary($sql, $data["description"], $data["price"], $_SESSION['user_id'], $data["services"], $data["jobname"], date("Y-m-d h:i:s"), $data["id"]);
    global $db;
    $id = $data["id"];
    $stmt = $db->prepare("delete from job_imgs  where job_id=? ");
    $stmt->execute([$id]);
    for ($i = 0; $i < count($files["img"]['name']); $i++) {
        $img_name = $files["img"]['name'][$i];
        $img = md5(microtime()) . "." . pathinfo($img_name, PATHINFO_EXTENSION);
        move_uploaded_file($files["img"]["tmp_name"][$i], "pics/" . $img);
        $stmt = $db->prepare("insert into job_imgs(imgs,job_id) values(?,?)");
        $stmt->execute([$img, $id]);
    }
}
function getAll()
{
    $sql = "select jobs.id as id,jobs.title as name,price,jobs.description as description,services.name as services,services.img as services_img,jobs.job_date as date ,users.name as user from jobs inner join services
    on
    job_service_id=services.id 
    inner join users on jobs.job_user_id =users.id;
     ";
    $data = myQuary($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

function getAllimg($id)
{

    $sql = "select * from job_imgs where job_id=?";
    $data = myQuary($sql, $id)->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
function delete($id)
{
    $sql = "delete from jobs where id=?";
    myQuary($sql, $id)->fetch(PDO::FETCH_ASSOC);
    header("Location:history.php");
}
