<?php
$array=[1,2,3,4,5];
$count=0;
function countArray($array, $count){
    foreach ($array as $element){
        $count=$count+1;
    }
    echo $count;
}

countArray($array, $count);
