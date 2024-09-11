 <?php
include_once("function.php");
if(!empty($_POST)){
    updateServices($_POST,$_FILES);
    header("location:services.php");
}elseif(!empty($_GET)){
    $id=$_GET['id'];
    //item is a variable that holds an array of the instance that its id =$id// 
    $oldService=getServiceById($id); 
}

?>

 <!DOCTYPE html>
 <html lang="ar" dir="rtl">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> Form</title>
     <!-- Include Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link rel="stylesheet" href="./all.min.css">
     <link rel="stylesheet" href="./style.css">
 </head>

 <body>
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
                 <h2>تعديل الخدمة</h2>
             </div>
             <!-- <div class="a-user-info" action="">
                 <form class="a-search-box">
                     <i class="fa-solid fa-magnifying-glass"></i>
                     <input type="text" placeholder="Search" name="service" id="">
                 </form>
             </div> -->

         </div>
         <div class="container mt-5" style="text-align: right;">
             <h2>تعديل</h2>
             <form action="" method="POST" enctype="multipart/form-data">
                 <!-- Product Name -->
                 <input type="number" class="form-control" value="<?php echo $oldService["id"]?>" id="productName"
                     name="id" required hidden readonly>
                 <div class="form-group">
                     <label for="productName">اسم الخدمة :</label>
                     <input type="text" class="form-control" value="<?php echo $oldService["name"]?>" id="productName"
                         name="name" required>
                 </div>

                 <!-- Product Price -->
                 <!-- <div class="form-group">
            <label for="productPrice">ID:</label>
             <input type="number" class="form-control" value =""  id="productPrice" name="id" required> -->
                 <!-- </div> -->

                 <!-- CATEGORY Image -->
                 <div class="form-group">
                     <label for="productImage">ارفق صورة: </label>
                     <br>
                     <img src="uploaded_imgs/<?php echo $oldService["img"]?>" width="200px">


                     <input type="file" class="form-control-file" id="productImage" name="image" accept="image/*"
                         required>
                 </div>

                 <!--  Category -->


                 <!-- Submit Button -->
                 <button type="submit" style="background-color:#1363a3; border:#1363a3 solid 1px; padding: 10px;" class="
                     btn btn-primary">حفظ</button>
             </form>
         </div>
     </div>

     <!-- Include Bootstrap JS and jQuery (Optional) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 </body>

 </html>