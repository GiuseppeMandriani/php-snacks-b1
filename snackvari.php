<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack Vari</title>
</head>
<body>
    <h1>Snack Vari</h1>
    <hr>

    <h3> 1) Inserire tante parole all'interno  di un array e controllare che la parola passata dall'utente sia presente nell'array (utilizzo query string url)</h3>

    <?php
    $words = ['Casa', 'Pallone', 'Bibicletta', 'Moto','']

    ?>

    <h4>Risultato</h4>
    <?php
    $word = $_GET['word'];   //'word' chiave messa nell'url

    // Check

    if(empty($word)){
        echo 'Parametro non presente';
    }elseif( in_array($word, $words)){
        echo 'Parola presente in lista';
    }else{
        echo 'Parola non presente';
    }

    ?>
    <hr>

    <h3> 2) Random number</h3>
    <h5>Numero random è: <?php echo rand(1,50); ?></h5>
    <hr>

    heade
   









</body>
</html>