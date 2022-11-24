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


if(!isset($_COOKIE["nbvisite"])){
    $count = 1 ;
    setcookie("nbvisite", $count);
}
else{
    $count = $_COOKIE["nbvisite"]+1 ;
    setcookie("nbvisite", $count);
} 
echo "Nombre de visite est de : " . $_COOKIE["nbvisite"] ;

if(isset($_GET["clear"])){
    $count = 1;
    setcookie("nbvisite", $count); 
    header("Location: ". "index.php"); 
    
}

?>
<form action="" method="get">
<input type="submit" name="clear" value="Clear"/>
</form>


</body>
</html>
