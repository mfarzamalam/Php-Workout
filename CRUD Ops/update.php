<?php

include('connection.php');

?>

<html>
<head>
</head>

<body>

<form action="" method="GET"><br>
Id : <input type="text" name="id" value="<?php  echo $_GET['id']; ?>" required><br>
Name : <input type="text" name="name" value="<?php  echo $_GET['name']; ?>" required><br>
Father Name : <input type="text" name="fname" value="<?php  echo $_GET['fname']; ?>" required><br><br>
            <input name="submit" value="update" type="submit" style="margin-left: 100px;">
</form>

<?php

    
    if(isset($_GET['submit']) == true)
    {    
        $ID = $_GET['id'];
        $NM = $_GET['name'];
        $FNM = $_GET['fname'];

        $update_query = "UPDATE students SET name='$NM', father_name='$FNM' WHERE id='$ID' ";
        $check = mysqli_query($db,$update_query);
        
        if($check){
            echo "Record update successfully See the updated <a href='display.php'> List </a>";
        }else {
            echo "Not update successfully";
        }
    }else {
        echo "Didn't updated yet";
    }

?>

</body>
</html>