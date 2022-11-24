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
    if(isset($_POST["prenom"])){
        $cookie_value=$_POST["prenom"] ;
        setcookie("user", $cookie_value,time()+3600);
        header('Location: '. "index.php"); 
    }
    if(isset($_POST["deco"])){
        
        setcookie("user") ;
        header('Location: '. "index.php"); 
        
    }

    if(isset($_COOKIE["user"])) {
        echo "Bonjour " . $_COOKIE["user"];
        echo '<form method ="post"> 
             <input type="submit" name ="deco" value="Deco"/>
             </form>' ;
    }
    else {
        echo 
        '<form method ="POST">
        <label for="prenom">prenom</label>
        <input type="text" name="prenom">
        <input type="submit" name="connexion" value="Connexion"/>
        </form>' ;
        
    }
    ?>
    
</body>
</html>