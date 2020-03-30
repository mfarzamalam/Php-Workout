<?php

include('connection.php');

?>

<html>
<head>
</head>

<body>

<form action="" method="GET"><br>
Id : <input type="text" name="id" required><br>
Name : <input type="text" name="name" required><br>
Father Name : <input type="text" name="fname" required><br><br>
            <input name="submit" value="submit" type="submit" style="margin-left: 100px;">
</form>

<?php

    $ids = $_GET['id'];
    $names = $_GET['name'];
    $f_names = $_GET['fname'];

    $query = "INSERT INTO students VALUES ('$ids','$names','$f_names')";
  
    $insert_data = mysqli_query($db,$query);

    if($insert_data){
        echo "<br>"."data is inserted";
    }else{
        echo "<br>"."not inserted";
    }
?>

</body>
</html>