<?php 
require_once(__DIR__ . '/../../login/HTML/includes/config_session.inc.php');
include_once('database.php');

function getService(){
    $sql = "select * from services";
    global $db;
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt-> fetchAll(PDO::FETCH_ASSOC);
    return $result;

}


function getFreelancers($service_id){
    $sql = "select users.id, users.name as name, users.img,  services.name as service_name,services.id as service_id
    from users INNER JOIN jobs on users.id = jobs.job_user_id INNER JOIN services on jobs.job_service_id = services.id
    where services.id=? and users.role='freelancer';";

    global $db;
    $stmt = $db->prepare($sql);
    $stmt->execute([$service_id]);
    $result = $stmt-> fetchAll(PDO::FETCH_ASSOC);
    return $result;

}
function get_all_Freelancers(){
    $sql = "select users.id, users.name as name, users.img,  services.name as service_name,services.id as service_id
    from users INNER JOIN jobs on users.id = jobs.job_user_id INNER JOIN services on jobs.job_service_id = services.id
    where users.role='freelancer';";
//where services.id=? amira 
    global $db;
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt-> fetchAll(PDO::FETCH_ASSOC);
    return $result;

}

function getCatById($id){

    $sql = "select * FROM services where services.id = ?; ";
    global $db;
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt-> fetchAll(PDO::FETCH_ASSOC);
    return $result;

}



function store($data,$files){

    global $db;
    $img = $files['image']['name'];
    $sql="insert into services(name,img) values(?,?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$data['name'],$img]);
    move_uploaded_file($files["image"]["tmp_name"],"pics/$img");
    return getService();

}



function deleteById($id){
    global $db;
    $sql = "delete from services where id=?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$id]);
    header("location:admin.php");
    
}


// function update($data,$files,$id){

//     global $db;
//     if(!empty($img)){
//         $img = $files['image']['name'];
//     $sql="update services set name=?,img=? where id=? ";
//     $stmt=$db->prepare($sql);
//     $stmt->execute([$data['name'],$img,$id]);
//     }else{
//         $sql="update services set name=?  where id=? ";
//         $stmt=$db->prepare($sql);
//         $stmt->execute([$data['name'],$id]);
//     }
   
//     move_uploaded_file($files["image"]["tmp_name"],"pics/$img");
//     return getService();

// }


function update($data,$files,$id){

    global $db;

        $img = $files['image']['name'];
    $sql="update services set name=?,img=? where id=? ";
    $stmt=$db->prepare($sql);
    $stmt->execute([$data['name'],$img,$id]);
    move_uploaded_file($files["image"]["tmp_name"],"pics/$img");
    return getService();

}


function getoffers(){
    $sql = "SELECT users.id ,users.name ,search_for_service.description,search_for_service.price,users.phone
    from users LEFT JOIN search_for_service on users.id = search_for_service.user_id; ";
    // where  users.role='Client';
//where services.id=? amira 
    global $db;
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt-> fetchAll(PDO::FETCH_ASSOC);
    return $result;

}
