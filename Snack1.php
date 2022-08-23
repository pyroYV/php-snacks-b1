<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Snack 1 :</h1>
    <?php

    //1 - Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    // Olimpia Milano - Cantù | 55-60
    $array = [
        ['team1'=>'olimpia',
        'team2'=>'cantu',
        'point_team1'=>'55',
        'point_team2'=> '60'],
        ['team1'=>'Casa Massima',
        'team2'=>'Cipro',
        'point_team1'=>'49',
        'point_team2'=> '11'],
        ['team1'=>'gino',
        'team2'=>'bbbbb',
        'point_team1'=>'14',
        'point_team2'=> '33'],
        ['team1'=>'yino',
        'team2'=>'sda',
        'point_team1'=>'02',
        'point_team2'=> '88'],
    ];


    for ($i=0; $i < count($array); $i++) { 
        
        $line[$i]  = $array[$i]['team1']. ' - '. $array[$i]['team2']. ' | '.$array[$i]['point_team1']. ' - '. $array[$i]['point_team2'];?>

       <h2>
        <?php
        echo $line[$i]
        ?>
       </h2>

     <?php
     }

    ?>


    

    

    


</body>
</html>