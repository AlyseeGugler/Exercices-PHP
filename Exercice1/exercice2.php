<?php
$length = 100;

function initArray($length) {
    for ($i=0;$i<$length; $i++){
        $array[]=$i;
        echo $array[$i]." ";
    }
}

initArray($length);
?>