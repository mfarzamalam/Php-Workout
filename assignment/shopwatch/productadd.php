<?php 

 include "connection.php";

    if(isset($_POST['ADD'])){
        $catname = $_POST['cname'];
        $catd = $_POST['des'];
        $pname = $_POST['pname'];
        $pquan = $_POST['pquantity'];
        $pprice = $_POST['pprice'];
        $pcat = $_POST['category'];
        $pimage = $_POST['pimage'];

        if($catname != ""){
            $query = "INSERT INTO `category`(`id`,`name`,`description`) VALUES ('','$catname','$catd')";
            $result = mysqli_query($conn,$query);
            
            if($result){
                header("location:product.php");
            }else {
                header("location:index.php?message=Failed to add category");
            }
        }else if ($pname != "" && $pquan != "" && $pprice != "" && $pcat != ""){
            $query = "INSERT INTO `product`(`id`,`name`,`quantity`,`price`,`image`,`category`) 
                             VALUES         ('','$pname','$pquan','$pprice','UK','$pcat')";
            $result = mysqli_query($conn,$query);
            
            if($result){
                header("location:product.php");
            }else {
                header("location:index.php?message=Failed to add Product");
            }
        }
    }
?>