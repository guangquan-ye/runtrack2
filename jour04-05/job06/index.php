<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get" class="">
        <label for="nombre">Votre nombre</label>
        <input type="text" name="number" id="nb">

        <input type="submit" value="envoyer">
    </form>
    <?php
    if ($_GET["number"] %2==0){
        echo "est pair" ;
    }
    else {
        echo "est impair" ;
    }

    ?>
</body>
</html>