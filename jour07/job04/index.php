<?php

function calcul($a,$operation,$c){
    if($operation=="+"){
        echo $a+$c;
    }
    elseif($operation=="-"){
        echo $a-$c;
    }
    elseif($operation=="*"){
        echo $a*$c;
    }
    elseif($operation=="/"){
        echo $a/$c ;
    }
}
calcul(4,"*",6) ;
?>