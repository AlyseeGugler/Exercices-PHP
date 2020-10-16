<?php
$length = 100;
$val = 1;
function initArray(array $array, int $length, $val) :void {
    for ($i=0;$i<$length; $i++){
        $array[]=$val;
    }
}

initArray([], 10, 2);