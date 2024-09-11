<?php
include_once("database.php");

/////////////////////////////////////////////////////// dashboard functions///
/////////////////////////////////////users functions////////////////////////////////////////////////////
//select all users//
function getusers():array{
$sql="select * from users";
    $result=myQuary($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// search for users//
function searchForUsers($user):array{
    $sql="select *from users where name like ?";
    $result=myQuary($sql,$user)->fetchAll(PDO::FETCH_ASSOC);
    return $result; 
}
//get user by id
// function getUserById(int $id): array {
//     $sql="select * from users where id=?";
//     $result=myQuary($sql,$id)->fetch(PDO::FETCH_ASSOC);
//     return $result;
// }
//delete by id 
function deleteUser(int $id){
  
    $sql="delete from users where id=?";
    myQuary($sql,$id);
    header("Location:users.php");
 }
////////////////////////////////////////////////////////service fuunctions/////////////////////////////////////////////////

//select all services//
function getservice():array{
$sql="select * from services";
    $result=myQuary($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
//add service
function addNewService($data,$files){
   $imgs=$files['image']['name'];
   $sql="insert into services(name,img)values(?,?)";
   myQuary($sql,$data['service_name'],$imgs);
   move_uploaded_file($files["image"]["tmp_name"],"uploaded_imgs/$imgs");
 }
// search for services//
function searchForService($service):array{
    $sql="select *from services where name like ?";
    $result=myQuary($sql,$service)->fetchAll(PDO::FETCH_ASSOC);
    return $result; 
}
///get service by id
function getServiceById(int $id): array {
    $sql="select * from services where id=?";
    $result=myQuary($sql,$id)->fetch(PDO::FETCH_ASSOC);
    return $result;
}
//update services//
function updateServices($data,$files){
    global $db;
    $img=$files['image']['name'];
    $sql="UPDATE services SET name=?,img=? WHERE id=?";
    $stmt=$db->prepare($sql);
    $stmt->execute([$data['name'],$img,$data['id']]);
    move_uploaded_file($files["image"]["tmp_name"],"uploaded_imgs/$img"); 
}
//delete service by id
  

function deleteService(int $id){
    
    $sql="delete from services where id=?";
    myQuary($sql,$id);
    header("Location:services.php");
 }
///////////////////////////////////////////////////////job functions///////////////////////////////////////////////
///select all from jobs
function getJob():array{
    $sql="select * from jobs";
        $result=myQuary($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
 //search for jobs ///
 function searchForJob($job):array{
    global $db; 
    $sql="select *from jobs where title like ? OR price =?";
    $stmt=$db->prepare($sql);
    $stmt->execute(["%".$job."%",$job]);
    // $result=myQuary($sql,$job)->fetchAll(PDO::FETCH_ASSOC);
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result; 
}  
//delete job by id
function deleteJob(int $id){
  
    $sql="delete from jobs where id=?";
    myQuary($sql,$id);
    header("Location:jobs.php");
 } 

////////////////////////////////////////////post function/////////////////////////////////////////
function getpost():array{
    $sql="select * from posts";
        $result=myQuary($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    // search for posts
    function searchForPost($post):array{
        global $db; 
        $sql="select *from posts where post_title like ? OR post_date like ?";
        $stmt=$db->prepare($sql);
        $stmt->execute(["%".$post."%","%".$post."%"]);
        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result; 
    }
    // get post by id
    function getPostById(int $id): array {
        $sql="select * from posts where id=?";
        $result=myQuary($sql,$id)->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    //delete post by id
    function deletePost(int $id){
  
    $sql="delete from posts where id=?";
    myQuary($sql,$id);
    header("Location:post.php");
 }
////////////////////////////////////////////comment function//////////////////////////////////
function getcomment():array{
    $sql="select * from comments";
        $result=myQuary($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
//search for comments
function searchForcomment($comment):array{
    global $db; 
    $sql="select *from comments where comment_date like ?";
    $stmt=$db->prepare($sql);
    $stmt->execute(["%".$comment."%"]);
    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result; 
}
//get commment by id
function getCommentById(int $id): array {
    $sql="select * from comments where id=?";
    $result=myQuary($sql,$id)->fetch(PDO::FETCH_ASSOC);
    return $result;
}
//delete comment by id
function deleteComment(int $id){
  
    $sql="delete from comments where id=?";
    myQuary($sql,$id);
    header("Location:comment.php");
 }
//get all job imgs//
function getJobImg(int $data):array{
    $sql="select * from job_imgs where job_id =?";
    $result=myQuary($sql,$data)->fetchAll(PDO::FETCH_ASSOC);
return $result;   
}
?>