<?php 

    for ($i=1;$i<=8;$i++) {
        echo "$i <br>";
        
        for ($j=1;$j<=10;$j++){
            $result = $i * $j;

            echo "   $result    ";
        }
    }

?>