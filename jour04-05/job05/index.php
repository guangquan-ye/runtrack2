<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="" method ="post" class="">
        <label for="username">Quel est votre username: </label>
        <input type ="text" name="nom" id="nom">

        <label for="password">Quel est votre mot de passe: </label>
        <input type="text" name="password" id="password">

        <input type ="submit" value="envoyer">
    </form>
    
    <?php
    
        if($_POST["nom"] == "John" && $_POST["password"] == "Rambo"){
            echo "C'est pas ma guerre" ;
        } 
        else {
            echo "Votre pire cauchemar" ;
        } 
    

    ?>
    
</body>
</html>