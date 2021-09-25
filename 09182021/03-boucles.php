<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>

<body>
    <h4>Boucle While </h4>
    <?php
    $i = 1;
    while ($i < 5) {
        echo $i . '<br>';
        $i++;
    }
    ?>
    <hr>
    <h4>Boucle do...while </h4>
    <?php
    $i = 1;
    do {
        echo $i . '<br>';
        $i++;
    } while ($i < 5)
    ?>
    <h4>Boucle for</h4>
    <?php
    $tab2 = ["a", "b", "c", "d", "e"]; // array
    for ($i = 0; $i < count($tab2); $i++) {
        echo $tab2[$i] . '<br>';
    }
    ?>

    <h4>Boucle foreach</h4>
    <?php
    $student2 = [
        "name" => "Noura",
        "age" => 19,
        "address" => "tunis",
        "is_active" => true,
        "moyenne" => 13.99
    ];
    foreach ($student2 as $key => $value) {
        echo $key . ': ' . $value . '<br>';
    }
    foreach ($tab2 as $key => $value) {
        echo $key . ': ' . $value . '<br>';
    }
    ?>
</body>

</html>