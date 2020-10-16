<?php
$array=[1,2,3,4,5];

function countArray(array $array) :int{
    $count=0;
    foreach ($array as $element){
        $count++;
    }
    return $count;
}

countArray($array);
