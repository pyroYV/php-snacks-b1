
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
            /* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
            che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
            Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" */
        
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];
            $stamp = false;
        
            if (strlen($name) > 3 && is_int(strpos($mail,'.'))  && is_int(strpos($mail,'@')) && is_int($age)) {  
              $stamp = true;     
            }
            ?>
            <h1> 
                Snack 2:
                <?php 
                if ($stamp) {
                    echo 'Accesso Riuscito';
                } else {
                    echo 'Accesso negato';
                }
                ?>
            </h1>
</body>
</html>