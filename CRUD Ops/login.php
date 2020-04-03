<?php
    session_start();
    include ("connection.php");
?>

<html>
<head></head>
<body>
<br>
    <form style="text-align: center;" action="" method="POST">
        Username : <input type="text" name="username" value=""><br>
        Password : <input type="password" name="password" value=""> <br><br>
                 <input type="submit" name="Login" value="Login in">

    </form>

<?php

    if(isset($_POST['Login']))
    {    
        $uname = $_POST['username'];
        $pass = $_POST['password'];
        $query = "SELECT * FROM `login` where username='$uname' && password='$pass' ";

        $result = mysqli_query($db,$query);
        $total = mysqli_num_rows($result);

        if($total==1){
            $_SESSION['yourname'] = $uname;
            header('location:display.php');
        }else {
            echo  "Login failed";
        }
    }

?>

</body>
</html>