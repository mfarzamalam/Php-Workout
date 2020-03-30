<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 15px;
}

</style>
<?php

include('connection.php');

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
                    <td>Delete</td>
                </tr>";
    }
}else {
    echo "no data is available to show";
}
?>
        </table>
