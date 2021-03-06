<?php

    // PHP Snack 1:
    // Creiamo un [array 'matches'],
    // contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
    // Ogni array della partita avrà una {squadra di casa} e una {squadra ospite},
    // {punti fatti dalla squadra di casa} e {punti fatti dalla squadra ospite}.
    // Stampiamo a schermo tutte le partite con questo schema:
    // Olimpia Milano - Cantù | 55 - 60

    // Array di partenza con tutti i dati delle squadre
    $matches = [
        [
            'homeTeam' => 'Fortitudo Bologna',
            'visitingTeam' => 'Dinamo Sassari',
            'homeTeamPoints' => 79,
            'visitingTeamPoints' => 89
        ],
        [
            'homeTeam' => 'Trieste',
            'visitingTeam' => 'Brescia',
            'homeTeamPoints' => 78,
            'visitingTeamPoints' => 81
        ],
        [
            'homeTeam' => 'Varese',
            'visitingTeam' => 'Cremona',
            'homeTeamPoints' => 110,
            'visitingTeamPoints' => 105 
        ],
        [
            'homeTeam' => 'Trento',
            'visitingTeam' => 'VL Pesaro',
            'homeTeamPoints' => 70,
            'visitingTeamPoints' => 81
        ],
        [
            'homeTeam' => 'Venezia',
            'visitingTeam' => 'Cantù',
            'homeTeamPoints' => 80,
            'visitingTeamPoints' => 75
        ],
        [
            'homeTeam' => 'Universo Treviso',
            'visitingTeam' => 'Brindisi',
            'homeTeamPoints' => 90,
            'visitingTeamPoints' => 108
        ],
        [
            'homeTeam' => 'Reggiana',
            'visitingTeam' => 'Virtus Bologna',
            'homeTeamPoints' => 62,
            'visitingTeamPoints' => 89
        ]
    ];
    // Calcolo la lunghezza dell'array
    $matchesLength = count($matches);


    // PHP Snack 2:
    // Passare come parametri GET name, mail e age e verificare
    // (cercando i metodi che non conosciamo nella documentazione) che:
    // 1. name sia più lungo di 3 caratteri,{strlen}
    // 2. mail contenga un punto e una chiocciola {strpos}
    // 3. age sia un numero. {is_numeric}
    // Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    
    $messaggio = 'Accesso negato';
    if (empty($name) || empty($mail) || empty($age)) {
        $missing = 'Un campo della query è vuoto, o non è corretto. Help: [ ?name=&mail=&age= ]';
    } elseif (strlen($name) <= 3) {
        $missing = 'Il nome deve contentere più di 3 caratteri.';
    } elseif (!(strpos($mail, '@')) || !(strpos($mail, '.'))){
        $missing = 'La mail deve contentere "@" e "."';
    } elseif (!is_numeric($age)) {
        $missing = 'L\'età non è un numero.';
    } else {
        $messaggio = 'Accesso riuscito';
        $missing = 'Benvenuto';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1-2 Array and If Condition</title>
</head>
<body>

    <h2>Snack - 1</h2>

    <?php
        // Ciclo for per scorrere tutto l'array
        for ($i = 0; $i < $matchesLength; $i++) {
            // Salvo ogni dato che mi serve in una variabile
            $homeTeam = $matches[$i]['homeTeam'];
            $visitingTeam = $matches[$i]['visitingTeam'];
            $homeTeamPoints = $matches[$i]['homeTeamPoints'];
            $visitingTeamPoints = $matches[$i]['visitingTeamPoints'];?>   

            <h3>
                <?php
                    // Stampo a schermo i miei dati
                    echo $homeTeam .' - ' .$visitingTeam .' | ' .$homeTeamPoints .' - ' .$visitingTeamPoints;
                ?>
            </h3>

    <?php } ?>

    <h2>Snack - 2</h2>

    <h3>
        <?php echo $messaggio;?>
    </h3>

    <p>
        <?php echo $missing;?>
    </p>

</body>
</html>