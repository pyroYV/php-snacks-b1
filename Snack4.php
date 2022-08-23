<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Snack4 :</h1>
    <ul>
     
    

    </ul>
    <?php
    /* Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta  */
    $singleNumbers = [];
    while (count($singleNumbers) < 15) {
    
        $random = rand(1,16);
        if(!in_array($random,$singleNumbers)){
        array_push($singleNumbers, $random);
        }
    }
    ?>

    <?php
    for ($i=0; $i < count($singleNumbers); $i++) { 
        echo '<li>'. $singleNumbers[$i]. '</li>';
    }
   /*  echo var_dump($singleNumbers);
     */
    ?>
</body>
</html>