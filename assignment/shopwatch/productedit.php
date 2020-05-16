<?php 

include "connection.php";

if(isset($_POST['EDIT'])){
    $id = $_GET['id'];
    $pname = $_POST['pname'];
    $pquan = $_POST['pquantity'];
    $pprice = $_POST['pprice'];
    $pcat = $_POST['category'];
    
    $query = "UPDATE `product` SET `name`='$pname', `quantity`='$pquan', `price`='$pprice' ,
                                        `image`='UK', `category`='$pcat' WHERE `id`='$id'"; 

            $result = mysqli_query($conn,$query);
            
            if($result){
                header("location:shop.php");
            }else {
                header("location:index.php?message=Failed to edit Product");
            }
}
?>