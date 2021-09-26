<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables PHP</title>
</head>

<body>
    <h2>Variables</h2>
    <h4>Pas de types de variables</h4>
    <?php
    $x = 17;
    echo $x;
    echo "<br>";
    $x = "hello";
    echo $x;
    ?>
    <h4>Types de variables disponibles</h4>
    <?php
    $nb = 25; // integer
    $pi = 3.14; // float
    $msg = "hello"; // string
    $is_valid = true; // boolean
    $tab = array(1, 2, 3, 4, 5); // array
    // ou bien
    $tab = [1, 2, 3, 4, 5]; // array
    echo $tab[0];    // 1
    $tab2 = ["name" => "John", "surname" => "Doe"]; // associative array
    echo $tab2["name"]; // John
    ?>
</body>

</html>