<?php 

 include "connection.php";

 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query1 = "SELECT * FROM `user` WHERE `name`='$name' && `email`='$email'";
    $result1 = mysqli_query($conn,$query2);
    $num = mysqli_num_rows($result1);

    if($num == 1){
        echo "YOU Already have an account";
    } else {
        $query2 = "INSERT INTO `user`(`id`,`name`,`email`,`password`,`image`) VALUES ('','$name','$email','$pass','UK')";
        $result2 = mysqli_query($conn,$query2);

        if($result2){
            header("location:login.php");
        }
        else {
            header("location:register.php");
        }
    }
}
?>