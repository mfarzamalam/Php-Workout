<?php 

include "connection.php";

$id = $_GET['id'];

$query = "DELETE FROM `product` WHERE `id`='$id'";
$result = mysqli_query($conn,$query);

if($result){
    header("location:shop.php");
}else {
    header("location:index.php?message=Failed to delete the product");
}

?>