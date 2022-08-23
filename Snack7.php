<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>
            Snack: 7
        </h1>

    <?php   
        /* Creare un array contenente qualche alunno di un'ipotetica classe. 
        Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
        Stampare Nome, Cognome e la media dei voti di ogni alunno. */

        $classe= [
            [
                'nome' => 'Simone',
                'cognome' => 'Rizzo',
                'voti' => [ 2 , 4 , 6, 8, 10],
            ],
            [
                'nome' => 'Stefano',
                'cognome' => 'Calarota',
                'voti' => [ 7 , 6 , 4 , 8 , 9],
            ],
            [
                'nome' => 'Giorno',
                'cognome' => 'Giovanna',
                'voti' => [ 7 , 2 , 1, 6, 4],
            ],
            [
                'nome' => 'Guido',
                'cognome' => 'Misa',
                'voti' => [  4, 4 , 4, 4, 4],
            ],
            [
                'nome' => 'Luca',
                'cognome' => 'Aestethic',
                'voti' => [ 1 , 2 , 3, 5, 8],
            ],
        ];
        
        for ($i=0; $i < count($classe); $i++) { 
            ?>
            <ul>
                <li>
                    Nome: 
                <?php 
                echo $classe[$i]['nome']
                ?>
                </li>
                <li>
                    Cognome: 
                <?php 
                echo $classe[$i]['cognome']
                ?>
                </li>
                <li>
                    Media: 
                <?php 
                $somma = 0;
                for ($index=0; $index < count($classe[$i]['voti']); $index++) { 
                    $somma +=$classe[$i]['voti'][$index];
                }
                echo  $somma / count($classe[$i]['voti']);
                ?>
                </li>
            </ul>

            <?php
        }


    ?>
</body>
</html>