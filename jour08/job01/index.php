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
session_start();
if(isset($_SESSION['nbvisites'])){

} else {
    $_SESSION["nbvisites"] = 0;
}

$_SESSION['nbvisites'] += 1;

echo "Nombre de visite est de : " . $_SESSION['nbvisites'] ;


?>
<form action="" method="get">
<input type="submit" name="clear" value="Clear session"/>
</form>
<?php

if(isset($_GET["clear"])){
    $_SESSION['count'] = 0 ;
    header('Location: '. "index.php"); 
    session_destroy() ;
}


?>

</body>
</html>
