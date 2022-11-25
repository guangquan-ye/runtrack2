<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job07</title>
</head>
<body>
<table border=3>
<thead>
<th>Superficie Totale</th>

</thead>

<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'jour09');

$request = $mysqli->query('select sum(superficie) from etage');

$result=$request->fetch_all();



for ($i=0 ; isset($result[$i]) ; $i++){
    echo "<tr>" ;
    for($j=0 ; isset($result[$i][$j]) ; $j++){
        echo  "<td>" . ($result[$i][$j]) . "</td>" ;
    }
    echo "</tr>" ;
} 




?>
</table>
    
</body>
</html>