<?php
/*$str="bonjour a toi le bonhomme de neige" ;
$char="o" ;*/

function occurences($str, $char){
$count= 0 ;
    for ($i=0; isset($str[$i]); $i++) { 
        if($char==$str[$i]){
        $count++ ;
        }
    } 
    echo $count ;
} 
echo "le nombre d'occurences est de :" . " ";
occurences("Bonjour", "o") ;

?>