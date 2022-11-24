<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$str = $_GET["str"] ;

function gras($str){
    $maj="ABCDEFGHIJKLMNOPQRSTUVWXYZ" ;
    for ($i = 0 ; isset($str[$i]) ; $i++) { 
        for ($j = 0 ; isset($maj[$j]) ; $j++) { 
            if($maj[$j]==$str[$i] && ($str[$i-1] ==  " " || $i == 0)){
                echo "<b>" ;
            }
        } echo $str[$i] ;

            if(isset ($str[$i+1]) && ($str[$i+1]) ==  " "){
            echo "</b>" ;
            }
    }  
}
function cesar($str){
    for ($i = 0 ; isset($str[$i]) ; $i++){
        
    }
}



if ($_GET["fonction"]=="fonction1") {
    echo gras($str);
}

?>
    <form method="get" action="">
        <label for="o">Texte</label>
        <input type="text" name="str">
        <select name="fonction">
            <option value="fonction1">gras</option>
            <option value="fonction2">cesar</option>
            <option value="fonction3">plateforme</option>
        </select>
        <input type="submit" value="Envoyer">
    
</body>
</html>