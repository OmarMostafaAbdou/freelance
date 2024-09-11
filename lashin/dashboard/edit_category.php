<?php 

include_once("functions.php");

if(!empty($_POST)){
    update($_POST,$_FILES,$_GET['id']);
    header("location:admin.php");
    

}


elseif(!empty($_GET)){
    $id = $_GET['id'];
    $service = getCatById($id);
    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Update Category</h2>
    <?php echo $service[0]['name']?>

    <form action="?id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
  
        <!-- Product Name -->
        <div class="form-group">
            <label for="productName">categoty Name:</label>
            <h4> Category Name</h4>
            <?php print_r($service)  ?>
            <input type="text" value="<?php echo $service[0]['name']?>"  class="form-control" id="productName" name="name" required>
        </div>

        <!-- Product Price -->


        <!-- Product Image -->
        <div class="form-group">
            <label for="productImage">Image (File):</label>
            <input type="file" class="form-control-file" id="productImage" name="image" accept="image/*" >
            
        </div>



        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Include Bootstrap JS and jQuery (Optional) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>