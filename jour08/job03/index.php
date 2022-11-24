<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method ="GET">
    <label for="prenom">prenom</label>
    <input type="text" name="prenom">
    <input type="submit" name="valider" value="valider"/>
    <input type="submit" name="clear" value="Clear session"/>
</form>
    <?php
    session_start();
    if(isset($_GET["prenom"])){
       $_SESSION["users"][] = $_GET["prenom"];
    }
    foreach($_SESSION["users"] as $key => $value){
        echo "<ul>" ;
        echo $value ;
        echo "</ul>" ;
    }

    if(isset($_GET["clear"])){
        $_SESSION['users'] = 0;
        session_destroy() ;
        header('Location: '. "index.php"); 
    }

    ?>
    
</body>
</html>