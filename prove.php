<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prove php</title>
</head>
<body>

    <h2>IF</h2>
    <?php
    $name = 'Giuseppe';

    if($name == 'Giuseppe'){
        echo 'Hello Giuseppe';
    } elseif ($name == 'Luca'){
        echo 'Hello Luca';
    } else {
        // echo "Hello  $name";
        // oppure 

        echo 'Hello' . $name;
    }

    ?>
    <hr>


    <h2>VAR DUMP 2</h2>
    <?php
    $my_Arr = ['Giuseppe', 'Luca', 'Davide'];
    $text = 'Lorem';
    $num = 100;

    var_dump($my_Arr)
    ?>

    <hr>

    <h2>CONTROLLO MAIL PASSATA IN GET E VERIFICO FORMATO</h2>

    <?php
    /**
     * Controllo mail passata in get sia formata da @ e ., se corretta ok altrimenti accesso negato
     * 
     */

    $email = $_GET['mail'];

    // Verifico se la chiave contiene qualcosa

    if(empty($email))   {
        echo 'Errore, nessun parametro passato';        // empty funzione nativa, ritorna true o false

    } elseif((strpos($email, '@') === false) || (strpos($email, '.') === false)) {

        echo 'Accesso negato';
    } else{
        echo 'Accesso riuscito';
    }         
    ?>

    <hr>

    <h2>ARRAY PHP</h2>

    <?php
    // $my_Arr = ['Giuseppe', 'Luca', 'Davide'];  (Array scritto sopra)

    // Versione semplice

    var_dump($my_Arr);

    // Array con chiavi associative

    $user = [
        'nome' => 'Giuseppe',
        'cognome' => 'Mandriani',
        'eta' => 32,
    ];

    var_dump($user);
    ?>



    
    
</body>
</html>