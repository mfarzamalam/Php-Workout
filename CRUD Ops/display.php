<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 15px;
}

</style>

<h1 style=text-align:center;> Welcome

<?php

include('connection.php'); 
session_start();

    //check wether the user has logged in or not
    // comment line 26 to 29(if condition) to view the page without login


$checkname = $_SESSION['yourname'];

if($checkname == true){} 
else {      // if not then redirect ot login page
    header('location:login.php');
}

    echo " $checkname" . " </h1>";  // displaying user name


$display_query = "Select * FROM students";  // the query which run to show the data
$data = mysqli_query($db,$display_query);   // stablish connection b/w database and the result which required

$rows = mysqli_num_rows($data); // checking the number of rows in the table
if ($rows > 0){
    ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Father name</th>
            </tr>
    <?php
    while($rslt = mysqli_fetch_assoc($data))  // displaying data as associative array
    {
        echo "  <tr>
                    <td>".$rslt['id']."</td>
                    <td>".$rslt['name']."</td>
                    <td>".$rslt['father_name']."</td>
                    <td><a href='update.php?id=$rslt[id]&&name=$rslt[name]&&fname=$rslt[father_name]'>Edit</a></td>
                    <td><a href='delete.php?id=$rslt[id]' onclick='return checkdelete()'>Delete</a></td>
                </tr>";
    }
}else {
    echo "no data is available to show";
}
?>
        </table>
<br>
<script>
    function checkdelete() {
        return confirm('Are you sure to delete this data ?');
    }

</script>

<a style="margin-left: 550px; font-size:30px;" href="logout.php">Logout</a>
<!-- <button style="Margin-left: 20px;" href="insert.php">Add new data</button> -->