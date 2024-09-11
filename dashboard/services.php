<?php
include_once("function.php");
if(!empty($_GET)){
    $service=searchForService($_GET["service"]);
}else{
$service=getservice();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="./all.min.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- start sidebar -->
    <div class="a-sidebar">
        <div class="logo"></div>
        <ul class="menu">

            <li class="single-menu">
                <a href="./dashboard.html">
                    <i class="fa-solid fa-house-chimney" style="color: #f5f5f5;"></i>
                    <span>الرئيسية</span>
                </a>
            </li>
            <li class="single-menu">
                <a href="./services.php">
                    <i class="fa-solid fa-server" style="color: #f5f5f5;"></i>
                    <span>الخدمات</span>
                </a>
            </li>

            <li class="single-menu">
                <a href="./users.php">
                    <i class="fa-solid fa-user" style="color:#f5f5f5;"></i>
                    <span>المستخدمين</span>
                </a>
            </li>

            <li class="single-menu">
                <a href="./jobs.php">
                    <span><i class="fa-solid fa-briefcase" style="color: #f5f5f5;"></i></span>
                    <span>الاعمال</span>
                </a>
            </li>

            <li class="single-menu">
                <a href="./post.php">
                    <span><i class="fa-regular fa-address-card" style="color: #f5f5f5;"></i></span>
                    <span>المنشورات</span>
                </a>
            </li>

            <li class="single-menu">
                <a href="./comment.php">
                    <span><i class="fa-solid fa-comments" style="color: #f5f5f5;"></i></span>
                    <span>التعليقات</span>
                </a>
            </li>

        </ul>
    </div>
    <!-- end sidebar -->
    <!-- start main-content -->
    <div class="a-main-content">
        <div class="a-header-wrapper">
            <div class="a-header-title">
                <h2>الخدمات</h2>
            </div>
            <div class="a-user-info" action="">
                <form class="a-search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="بحث..." name="service" id="">
                </form>
            </div>

        </div>
        <div class="w3-container">
            <div class="empty">
                <a href="./addform.php"><button class="w3-button w3-circle w3-black">+</button></a>
            </div>
            <table class=" w3-table-all w3-card-4">
                <tr style="background-color: #cbd8cb;">
                    <th>Action</th>
                    <th>Img</th>
                    <th>Name</th>
                    <th>Id</th>
                </tr>
                <?php
                foreach($service as $row){
               echo"
                    <tr>
                    <td>
                    <a href='deleteservice.php?id=$row[id]'class='btn'><i class='fa-solid fa-trash' style='color: #ff0f0f;'></i></a>
                    <a href='editService.php?id=$row[id]'class='btn'><i class='fa-solid fa-pen-to-square' style='color: #2a6a32;'></i></a>
                    </td>
                    <td><img style='width: 200px;'src='uploaded_imgs/$row[img]'></td>
                    <td>$row[name]</td>
                    <td>$row[id]</td>
                </tr>";}
                ?>
            </table>
        </div>
    </div>
    <!-- end main-content -->


</body>

</html>