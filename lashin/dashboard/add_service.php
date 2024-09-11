<?php 
if(!empty($_POST)){
    include_once("functions.php");
    store($_POST,$_FILES);
    header("location:admin.php");
    

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
    <h2>Add a New Product</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- Product Name -->
        <div class="form-group">
            <label for="name">service category Name:</label>
            <input type="text" class="form-control" id="servicetName" name="name" required>
        </div>

        <!-- Product Price -->


        <!-- Product Image -->
        <div class="form-group">
            <label for="serviceImage">Image (File):</label>
            <input type="file" class="form-control-file" id="serviceImage" name="image" accept="image/*" >
        </div>

        <!-- Product Category -->


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