<?php

$str="I'm sorry Dave i'm afraid I can't go that." ;
$v="AaEeIOoUuYy" ;

    for ($i=0 ; isset($str[$i]) ; $i++) {
        for ($x=0 ; isset($v[$x]) ; $x++) {
        if ($v[$x] == $str[$i]) {
            echo $v[$x] ;
        }
    }
}
?>