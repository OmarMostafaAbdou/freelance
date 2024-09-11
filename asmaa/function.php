<?php
require_once(__DIR__ . '/../../rokaya-landing/login/HTML/includes/config_session.inc.php');

include_once("database.php");
function getFreelancerInfo($id):array{
    $sql="select * from users where id=?";
    $result=myQuary($sql,$id)->fetch(PDO::FETCH_ASSOC);
    return $result;
 }

function getjobs($user_id,$service_id):array{
    $sql="select * from jobs where user_id=? and service_id=?";
    $result=myQuary($sql, $user_id,$service_id)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
    
}

function getimgs($jop_id):array{
    $sql="select * from job_imgs where id=?";
    $result=myQuary($sql,$jop_id)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
 
}


?>