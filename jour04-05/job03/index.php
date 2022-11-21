<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post" class="formcol">
        <label for="nom">Quel est votre nom: </label>
        <input type ="text" name="nom" id="nom">

        <label for="prenom">Quel est votre prenom: </label>
        <input type ="text" name="prenom" id="prenom">


        <input type="submit" value="envoyer">
    </form>
    <?php 
    $counter = 0 ;
    foreach($_POST as $var){
        $counter=$counter+1;
    }
    echo "<br>";
    echo "le nombre d'argument POST envoyé est :$counter";
    ?>
</body>
</html>