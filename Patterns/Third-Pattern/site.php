<?php

    $num = 4;
    for($i=0;$i<=$num;$i++){
        for($j=$num;$j>=$i;$j--){
            if($j==$num && $i>0){
                for($k=0;$k<$i;$k++){
                    echo "s";           // S represent the whitespaces
                }
            }
            echo"*";
        }
        echo "<br>";
    }


    // OUTPUT 

    /*
    
        *****
        s****
        ss***
        sss**
        ssss*

    */

?>