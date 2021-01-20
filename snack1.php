<?php
/*
PHP Snack 1:
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60
*/

    $matches = [
        [
            'homeTeam' => 'Denver Nuggets',
            'awayTeam' => 'Oklahoma City Thunder',
            'homePoints' => 119,
            'awayPoints' => 101,
        ],
        [
            'homeTeam' => 'Utah Jazz',
            'awayTeam' => 'New Orleans Pelicans',
            'homePoints' => 118,
            'awayPoints' => 102,
        ],
        [
            'homeTeam' => 'Los Angeles Lakers',
            'awayTeam' => 'Golden State Warriors',
            'homePoints' => 113,
            'awayPoints' => 115,
        ],
        [
            'homeTeam' => 'Chicago Bulls',
            'awayTeam' => 'Houston Rockets',
            'homePoints' => 125,
            'awayPoints' => 120,
        ],
        [
            'homeTeam' => 'Miami Heat',
            'awayTeam' => 'Detroit Pistons',
            'homePoints' => 113,
            'awayPoints' => 117,
        ],
        [
            'homeTeam' => 'Brooklyn Nets',
            'awayTeam' => 'Milwaukee Buks',
            'homePoints' => 125,
            'awayPoints' => 123,
        ],
        [
            'homeTeam' => 'Toronto Raptors',
            'awayTeam' => 'Dallas Mavericks',
            'homePoints' => 116,
            'awayPoints' => 93,
        ],
        [
            'homeTeam' => 'New York Knicks',
            'awayTeam' => 'Orlando Magic',
            'homePoints' => 91,
            'awayPoints' => 84,
        ],
    ];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Snack #1</title>
</head>
<body>

    <ol>
        <?php
            for ($i = 0; $i < count($matches); $i++) {
                echo "<li>" . $matches[$i]['homeTeam'] . " - " . $matches[$i]['awayTeam'] . " | " . $matches[$i]['homePoints'] . " - " . $matches[$i]['awayPoints'] . "</li>";
            }
         ?>
    </ol>

</body>
</html>
