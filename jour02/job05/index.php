<?php

for ($n = 2; $n <= 1000; $n++){
    $c=0;
    for( $i = 2 ; $i <= $n/2 ; $i++) {
        if ($n % $i == 0){
            $c++;
            break;
        }
    }
    if($c == 0 && $n !=1){
        echo $n . "<br>";
    }
  }
 
?>