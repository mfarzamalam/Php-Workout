<?php

include('connection.php');

?>

<html>
<head>
</head>

<body>

<form action="" method="post"><br>
Id : <input type="text" name="id" ><br>
Name : <input type="text" name="name" ><br>
Father Name : <input type="text" name="fname" ><br><br>
            <input name="submit" value="submit" type="submit" style="margin-left: 100px;">
</form>

<?php
if(isset($_POST['submit']))
{
    $ids = $_POST['id'];
    $names = $_POST['name'];
    $f_names = $_POST['fname'];

    $query = "INSERT INTO students VALUES ('$ids','$names','$f_names')";
  
    $insert_data = mysqli_query($db,$query);

    if($insert_data){
        echo "<br>"."data is inserted";
    }else{
        echo "<br>"."not inserted";
    }
}
    
?>

</body>
</html>