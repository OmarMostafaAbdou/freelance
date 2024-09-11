<?php

include_once("../function.php");

// if(!empty($_GET)){
   
//     if(isset($_GET['item'])){
//     $result=search($_GET['item']); 
// }if(isset($_GET['name'])){
//     $result=sortbyname($_GET['name']); 
// }if(isset($_GET['price'])){
//     $result=sortbyprice($_GET['price']); 
// }
// }else{
   $histories=getAll();
   

?>
<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

    
    <link rel="stylesheet" href="history.css">
    <title>Document</title>
</head>
<body>
<a  class="but_prev" href="../free.php"><i class="fa-regular fa-circle-right"></i></a>
<div class="flexbox" ontouchstart="this.classList.toggle('hover')">

 <?php
   foreach ($histories as $history) {
   echo '
   <div class="card-container">
     <div class="card">
    <div class="front">
      <img src="./pics/'.$history['services_img'].'" width="100px" style="padding:20px 0 0 0;">
      <h3>'.$history['services'].'</h3>
      <p>'.$history['description'].'</p>
      <h4>
        <span class="fa fa-calendar-o" style="font-size:18px; margin-right:10px">'.$history['date'].'</span>
        <br>
        <span class="fa fa-map-marker" style="font-size:18px; margin-right:10px">'.$history['price'].' </span>
      </div>
        <div class="back">';
        $images=getAllimg($history['id']);
       foreach($images as $img){
      echo ' <img src="../pics/'.$img['imgs'].'" alt="">
';
       }
      
       echo '
      
       </div>
     </div> 
     <div class="control"><a href="delete.php?id='.$history['id'].'"class="btn bg-dark">delete</a>
   <a href="../edit.php?id='.$history['id'].'"class="btn">update</a></div>
       </div>';


     }

   
?>
</div>

</body>
</html>