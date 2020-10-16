<?php
$array=[1,2,3,4,5];
$indice1=2;
$indice2=3;

function mixArray(array &$array, $indice1, $indice2) :void{
    $element=$array[$indice1];
    $array[$indice1] = $array[$indice2];
    $array[$indice2] = $element;
}

mixArray($array, $indice1, $indice2);
