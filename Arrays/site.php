<?php

$arr = array(11,21,4,7,6,5,1);
$temp;

echo " Array : ";
foreach($arr as $value){
    echo " $value ";
}

echo "$value <br>"; 


echo " Ascending : ";

for($j=0;$j<count($arr)-1;$j++){
    for($i=0;$i<count($arr)-1;$i++){
        if($arr[$i]>$arr[$i+1]){
            $temp = $arr[$i+1];
            $arr[$i+1] = $arr[$i];
            $arr[$i] = $temp;
        }
    }
}


foreach($arr as $value){
    echo " $value ";
}


echo "<br> Descending : ";

for($j=0;$j<count($arr)-1;$j++){
    for($i=0;$i<count($arr)-1;$i++){
        if($arr[$i]<$arr[$i+1]){
            $temp = $arr[$i+1];
            $arr[$i+1] = $arr[$i];
            $arr[$i] = $temp;
        }
    }
}

foreach($arr as $value){
    echo " $value ";
}


// Multi-dimensional array 


$Student = array(
    1 => array(
        "Name" => "Farzam",
        "Age"  => "26",
    ),
    2 => array(
        "Name" => "USama",
        "Age"  => "16"
    ),
);

    for($i=0;$i<count($Student);$i++){
        $row = each($Student);
        $val = $row["key"];
        echo "<br>"."$val"; 
        
        for($j=0; $j<count($Student[$val]); $j++){
            
        }
    }

?>