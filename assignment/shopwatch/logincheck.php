<?php 

 include "connection.php";

 if(isset($_POST['login'])){
    $name = $_POST['name'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM `user` WHERE `name`='$name' && `password`='$pass'";
    $result = mysqli_query($conn,$query);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $row = mysqli_fetch_assoc($result);

        $_SESSION['name'] = $name;
        $_SESSION['image'] = $row['image'];

        header("location:index.php");
    } else {
        header("location:login.php?message=Login Failed");
    }
}

 ?>