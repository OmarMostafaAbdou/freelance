<?php
include_once("functions.php");
$id=$_GET['c_id'];
$p_id=$_GET['p_id'];

deleteById($id);
header("location:details.php?id=$p_id");
?>