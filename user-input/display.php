<?php

include('connection.php');

$display_query = "Select * FROM students";  // the query which run to show the data
$data = mysqli_query($db,$display_query);   // stablish connection b/w database and the result which required

$rows = mysqli_num_rows($data); // checking the number of rows in the table
if ($rows > 0){
    ?>
        <table border="1px solid black;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Father name</th>
            </tr>
    <?php
    while($display_result = mysqli_fetch_assoc($data))  // displaying data as associative array
    {
        echo "  <tr>
                    <td>".$display_result['id']."</td>
                    <td>".$display_result['name']."</td>
                    <td>".$display_result['father_name']."</td>
                </tr>";
    }
}else {
    echo "no data is available to show";
}
?>
        </table>
