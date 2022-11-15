<?php 
for ($n=0 ; $n<=100 ; $n++){
    if($n <= 20) {
        echo "<i>$n</i>" . "<br>" ;
    }
    if($n == 42){
    echo "La Plateforme_" . "<br>";
    }
    else if($n >= 25 && $n <= 50){
        echo "<u>$n</u>" . "<br>" ;
    }
    else {
    echo $n . "<br>";
    }
}
?>