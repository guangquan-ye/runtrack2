<?php
$jour="" ;
function bonjour($jour){
    if ($jour==TRUE){
        echo "Bonjour" ;
    }
    else {
        echo "Bonsoir" ;
    }
} 
bonjour(TRUE) ;
echo '<br>' ;
bonjour(FALSE);
?>