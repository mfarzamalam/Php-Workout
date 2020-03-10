<?php

function reverse($arr) {
	$num_count = count($arr);
    $new_arr = array();
        for ($i=$num_count-1;$i>=0;$i--){
            $new_arr[] = $arr[$i];
        }
		return $new_arr;
    }

    reverse([1,2,3,4,5])
?>