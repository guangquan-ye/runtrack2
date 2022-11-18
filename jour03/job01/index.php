<?php
$n=[200, 204, 173, 98, 171, 404, 459] ;
foreach ($n as $value){
    if($value%2==0) {
    echo $value . " is even" . "<br>" ;
    }
    else{
        echo $value . " is odd" . "<br>" ;
    }
}