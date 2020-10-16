<?php
function somme(int $n) : int {
    $somme=0;
    for ($i=1;$i<=$n;$i++){
        $somme=$somme+$i;
    }
    return $somme;
}
?>
