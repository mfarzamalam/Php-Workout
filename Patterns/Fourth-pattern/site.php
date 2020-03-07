<?php

    $num = 4;
    for($i=0;$i<=$num;$i++){
        for($j=0;$j<=$i;$j++){
            if($j==0 && $i<$num){
                for($k=0;$k<$num-$i;$k++){
                    echo"s";        // S represent the whitespaces
                }
            }
                echo"*";
        }
            echo"<br>";
    }


    // OUTPUT 

    /*
    
        ssss*
        sss**
        ss***
        s****
        *****
    
    */
?>