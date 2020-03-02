<?php 

    for ($i=1;$i<=100;$i++){      // printing value from 1 to 100  

        if($i%3!==0  &&  $i%7!==0){  // applying the condition to hide all the value that are divisible by 3 or 7

            echo "$i <br>";
        
        }
    }

?>