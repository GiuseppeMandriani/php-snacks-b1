<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prove php</title>
</head>
<body>
    <header>
        <h1> IF, VAR DUMP, ARRAY(metodi e aggiunte), FOR</h1>
    </header>

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

    <p>Accesso a valori di un Array semplice</p>
    <ul>
        <li><?php echo $my_Arr[1]; ?></li>
    </ul>

    <p>Accesso a valori con di array con chiavi associative</p>

    <dl>
        <dt>Nome</dt>
        <dd><?php echo $user['nome']; ?></dd>
        <dt>Cognome</dt>
        <dd><?php echo $user['cognome']; ?></dd>
        <dt>Età</dt>
        <dd><?php echo $user['eta']; ?></dd>
    </dl>

    <p>Aggiunta elemento array</p>
    <?php
    // Aggiunta al primo Array (semplice)
    $my_Arr[] = 'Antonio';
    var_dump($my_Arr);

    // Aggiunta di una coppia chiave valore al secondo Array 
    $user['hobby'] = 'calcio';

    var_dump($user);

    ?>
    <hr>

    <h2>Manipolazione e lettura Array Multidimensionali</h2>

    <h4>Array Key exists</h4>
    <?php
    $exist = array_key_exists('nome', $user);  //('Tipo di key da cercare', array in cui cercare) restituisce boolean  
    var_dump($exist);
    ?>

    <h4>In Array (Includes di JS)</h4>
    <?php   // Restituisce true se valore presente
    $animals = ['Cane', 'Gatto', 'Topo'];
    $in = in_array('Elefante',$animals);
    var_dump($in);
    
    ?>

    <h4>Array Keys (restituisce le chiavi dell'array )</h4>
    <?php   
    $keys = array_keys($user);
    var_dump($keys);
    ?>

    <h4>Merge di Array</h4>
    <?php   // Unione di più array 
    $merged = array_merge($animals, $my_Arr);
    var_dump($merged);

    ?>

    <h4>Ottenere chiave da un array</h4>
    <?php   // Unione di più array 
    $target = array_search('Mandriani',$user,);
    var_dump($target);

    ?>

    <hr>

    <h2>FOR</h2>

    <?php   
    for($i = 1; $i <= 10; $i++){
        echo 'item:' .$i . '<br/>';
    }

    ?>
    <hr>

    <h3> Loop che stampa li</h3>
    
    <!-- Metodo 1 -->
    <h6>Metodo 1</h6>
    <ul>
        <?php for($i = 1; $i <= 10; $i++) { ?>
            <li>
                <span><?php echo $i; ?></span>
            </li>
        <?php } ?>
    </ul>


    <!-- Metodo 2 -->
    <h6>Metodo 2 (Stile WordPress) </h6>
    <ul>
        <?php for($i = 1; $i <= 10; $i++) : ?>
            <li>
                <span><?php echo $i; ?></span>
            </li>
        <?php endfor ?>
    </ul>
    <hr>

    <h3>Loop in array</h3>

    <?php
    $list = ['Giuseppe', 'Aldo', 'Davide'];
    for ($i = 0; $i < count($list); $i++){          // count per lunghezza array = length parametro è l'array
        echo $list[$i] . '<br/>';
    }
    ?>

    <h4>Stampo nella lista</h4>
    <ul>
        <?php for($i = 0; $i < count($list); $i++) { ?>
            <li>
                <span><?php echo $list[$i]; ?></span>
            </li>
        <?php } ?>
    
    </ul>
    <hr>

    <h3>Array Multidimensionale</h3>

    <?php
    $team = [
        [
            'name' => 'Giuseppe',
            'role' => 'Student',
            'age' => 32,
        ],
        [
            'name' => 'Davide',
            'role' => 'Student',
            'age' => 25,
        ],

    ];

    for($i = 0; $i < count($team); $i++){
        // var_dump($team[$i]);
        var_dump($team[$i]['role']);

    }

    ?>

    <h4>Stampo nella lista</h4>

    <ul>
        <?php for($i = 0; $i < count($team); $i++) { var_dump($team[$i]['name']) ?>
            <li>
                <span><?php echo $team[$i]['name']; ?></span>
            </li>
        <?php } ?>
    
    </ul>




    



    
    
</body>
</html>