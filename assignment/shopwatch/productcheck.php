<?php 

 include "connection.php";

    if(isset($_POST['ADD'])){
        $catname = $_POST['cname'];
        $catd = $_POST['des'];

        $query = "INSERT INTO `category`(`id`,`name`,`description`) VALUES ('','$catname','$catd')";
        $result = mysqli_query($conn,$query);
        
        if($result){
            header("location:product.php");
        }else {
            header("location:index.php?message=Failed to add category");
        }
    }
?>