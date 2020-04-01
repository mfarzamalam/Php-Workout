<?php

include("connection.php");

$roll_no = $_GET['id'];

$deleted_query = "DELETE FROM students WHERE id='$roll_no'";

$result = mysqli_query($db,$deleted_query);

if($result == true)
{
    echo "<script> alert('Record deleted') </script>";
    ?>
    <meta http-equiv="Refresh" content="0; url=http://localhost/Php-Workout/CRUD%20Ops/display.php">

    <?php
}else 
{
    echo "ErroR, Try <a href='display.php'> Again </a>";
}
?>