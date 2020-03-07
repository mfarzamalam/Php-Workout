<?php

    $f_num = 15;
    $s_num = 27;
    $temp;

    echo "First number = $f_num , Second number = $s_num";

    $temp = $f_num;
    $f_num = $s_num;
    $s_num = $temp;

    echo"<br> After swapping, <br> First number = $f_num , Second number = $s_num";

?>