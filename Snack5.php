<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Snack 5: </h1>
    <?php
   /*  Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    Ogni punto un nuovo paragrafo. */

    $lorem = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic enim nam voluptatum et nobis, praesentium aspernatur aliquam in cumque doloribus nemo minima minus inventore repellendus magni libero natus tenetur ipsum. Iste vitae commodi eum fuga assumenda voluptatem. Praesentium impedit laboriosam obcaecati illum reiciendis consectetur, ad accusantium veritatis rerum molestiae tempore iusto beatae aliquid quibusdam eaque architecto delectus nobis voluptas odio';

    $splitLorem = explode('.',$lorem);

    for ($i=0; $i < count($splitLorem); $i++) { ?>
        
        <p>
            <?php
            echo $splitLorem[$i];
            ?>
        </p>
    <?php
        }
    ?>
</body>
</html>