<?php
    /*
    PHP Snack 2:
    Passare come parametri GET name, mail e age e
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri,
    2. mail contenga un punto e una chiocciola
    3. age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti
    “Accesso negato”.
    */

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = intval($_GET['age']);


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Snack #2</title>
</head>
<body>

    <h1 style="text-align: center;">
        <?php
            if ( strlen($name) > 3 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_int($age) ) {
                echo "ACCESSO CONSENTITO";
            } else {
                echo "ACCESSO NEGATO";
            }
         ?>
    </h1>
</body>
</html>
