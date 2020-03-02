<?php 

    $j = 1;
    $num = 8;

    for ($i=$num; $i>0; $i--){
        $j *= $i;
    }

    echo "Factorial of $num is $j";
    
?>