<?php

echo "<center><h1> Ascending Order </h1>";

$arr = array(11,2,4,7,6,5,1);
$temp;

echo " Array before sorted : ";

foreach($arr as $value){
    echo " $value ";
}

for($j=0;$j<count($arr)-1;$j++){
    for($i=0;$i<count($arr)-1;$i++){
        if($arr[$i]>$arr[$i+1]){
            $temp = $arr[$i+1];
            $arr[$i+1] = $arr[$i];
            $arr[$i] = $temp;
        }
    }
}

echo " <br> Array after sorted : ";

foreach($arr as $value){
    echo " $value ";
}

"</center>";

?>