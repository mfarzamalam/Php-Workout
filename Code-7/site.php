<?php

// This is a prototype of a chess board program

// Odd number indicate BLACK color while even number represent WHITE

    for ($i=0;$i<=54;$i++){
        if($i%9==0){
            echo " <br> ";
        }else {
            echo " $i ";
        }
    }

?>