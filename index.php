<?php
/**
 * PHP Snack 1:
 * Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
 * Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
 * Stampiamo a schermo tutte le partite con questo schema:
 * Olimpia Milano - Cantù | 55-60
 * 
 * 
 * 
 * PHP Snack 2:
 * Passare come parametri GET (query string) name, mail e age
 * verificare (cercando i metodi che non
 * conosciamo nella documentazione) che:
 * 
 * 1. name sia più lungo di 3 caratteri
 * 2. che mail contenga un punto e una chiocciola
 * 3. che age sia un numero.
 * Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 * 
 * 
 * 
 * 
 * PHP Snack 3 Bonus (solo come bonus e solo se completati i due precedenti)
 * Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 * 
 * 
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>
<body>
    <header>
        <h1>PHP Snack 1 & Snack 2</h1>
    </header>
    <hr>

    <main>
        <h2>Snack 1</h2>
        <?php

        

        $matches = [
            [
                'home_Team' => 'Milan',
                'guest_Team' =>'Inter',
                'home_Point' => rand(1,30),
                'guest_Point' => rand(1,30),
            ],
            [
                'home_Team' => 'Roma',
                'guest_Team' =>'Lazio',
                'home_Point' => rand(1,30),
                'guest_Point' => rand(1,30),
            ],
            [
                'home_Team' => 'Juventus',
                'guest_Team' =>'Atalanta',
                'home_Point' => rand(1,30),
                'guest_Point' => rand(1,30),
            ],
            [
                'home_Team' => 'Napoli',
                'guest_Team' =>'Benevento',
                'home_Point' => rand(1,30),
                'guest_Point' => rand(1,30),
            ],
            [
                'home_Team' => 'Fiorentina',
                'guest_Team' =>'Sassuolo',
                'home_Point' => rand(1,30),
                'guest_Point' => rand(1,30),
            ],
        ];

        // for($i = 0; $i < count($matches); $i++){
        //     var_dump ($matches[$i]);
        // }

        ?>

        <ul>
            <?php for ($i = 0; $i < count($matches); $i++) { ?>
            <li>
                <span><?php echo $matches[$i]['home_Team'] . ' - ' . $matches[$i]['guest_Team'] . ' | ' . $matches[$i]['home_Point'] . '-' . $matches[$i]['guest_Point']  ?> </span>
            </li>
            <?php } ?>
        </ul>





    </main>



    <a href="./prove.php">Esempi prova</a>
    <a href="./snackvari.php">Snack vari</a>
    
</body>
</html>
