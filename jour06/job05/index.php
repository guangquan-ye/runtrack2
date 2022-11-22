<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
    <?php

    if($_POST["CSS"]=="CSS1"){
        echo "vous avez choisis le style 1" . '<link href="style1.css" rel="stylesheet">' ;
    }
    elseif($_POST["CSS"]=="CSS2"){
        echo "vous avez choisis le style 2" . '<link href="style2.css" rel="stylesheet">' ;
    }
    elseif($_POST["CSS"]=="CSS3"){
        echo "vous avez choisis le style 3" . '<link href="style3.css" rel="stylesheet">' ;
    }


?>
</head>
<body>
    
<div class="tab">
<form method="post" action="">
    <select name="CSS">
        <option value=""selected>style</option>
        <option value="CSS1">style1</option>
        <option value="CSS2">style2</option>
        <option value="CSS3">style3</option>
    </select>
    <input type="submit" value="Envoyer">

</form>
</div>



    
</body>
</html>