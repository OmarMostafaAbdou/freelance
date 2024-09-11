<?php
require_once("../login/HTML/includes/config_session.inc.php");
include_once("database.php");
// ---------getAllData----------
function getAll() : array {
    
    $sql="select * from posts";
    $result = myQuery($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
// ------------store--------------
function store($data){
    $sql="insert into posts(post_title,post_content,post_users_id) values(?,?,?)";
    myQuery($sql,$data["title"],$data["body"],$_SESSION['user_id']);  
}
// ---------------get post's Data-------------

function getPost($id) {
    $sql="SELECT `id`, `post_content`, `post_title`, `post_date`, `post_users_id` FROM `posts` WHERE id=? ";
   return myQuery($sql,$id)->fetch(PDO::FETCH_ASSOC);

}
// ----------------comments-----------------------
function addComment($data, $id) {
    $sql = "INSERT INTO comments (comment_content, comment_user_id, comment_post_id) VALUES (?, ?, ?)";
myQuery($sql, $data, $_SESSION['user_id'], $id);

     header("Location:details.php?id=$id");
}


function getComment($id){
    $sql="SELECT `id`, `comment_content`,`comment_date`, `comment_post_id`, `comment_user_id` FROM `comments` WHERE comment_post_id=?";
    return myQuery($sql,$id)->fetchAll(PDO::FETCH_ASSOC);
}
// --------------------GetByID-------------------//
function getById(int $id) :array {
    $sql="select * from comments where id=?";
    $result=myQuery($sql,$id)->fetch(PDO::FETCH_ASSOC);
    return $result;
}
// ----------------DELETE------------------------//
function deleteById(int $id){
    $sql="delete from comments where id=?";
    myQuery($sql,$id);
}
// ------------UPDATE------------------//
function update(int $id){
    $sql="UPDATE `comments` SET `comment_content`='[?]' WHERE ,`comment_post_id`=?";
    myQuery($sql,$id);
}