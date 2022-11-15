<?php 
for ($n = 1; $n <= 100; $n++){
    if ($n % 3 == 0 && $n % 5 == 0){
        echo "Fizzbuzz" . "<br>" ;
    }
    elseif ($n % 3 == 0){
        echo "Fizz" . "<br>" ;
    }
    elseif ($n % 5 == 0){
        echo "Buzz" . "<br>" ;
    }
    else{
        echo $n . "<br>" ;
    }

}
?>