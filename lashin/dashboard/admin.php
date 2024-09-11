<?php 
 
include_once("functions.php");

$data = getService();




?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Product List</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <!-- Sidebar content goes here -->
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h1>Admin </h1>
                <a class="btn btn-info" href="add_service.php">add</a>

                <!-- Table -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name
                            <a style="text-decoration: none;" href="?name=up">
                                <i class="fa-solid fa-arrow-up"></i>
                                </a>
                                <a href="?name=down">
                                <i class="fa-solid fa-arrow-down"></i>
                                </a>
                            </th>
                            
                            <th>Category Image</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                    
                    
   <?php
   
   foreach ($data as $service) {
    echo"
    <tr>
    <td>$service[id]</td>
    <td>$service[name]</td>
    <td><img style='width:80px' src='../pics/$service[img]'></img></td>
    

    <td><a href='delete_service_cat.php?id=$service[id]' class='btn btn-danger '> delete</a></td>
    <td><a href='edit_category.php?id=$service[id]' class='btn btn-light '> edit</a></td>       
    
    </tr>
   
 ";
   }
   

   ?> 
  
   
                </tbody>
                </table>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
