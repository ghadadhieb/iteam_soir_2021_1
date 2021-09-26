<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Types de données en PHP</title>
</head>

<body>
    <h2>Types de données en PHP</h2>

    <h4>Chaines de caractères</h4>

    <?php
    $txt1 = "iTeam";
    $txt2 = 'iTeam';

    $univ = 'iTeam';
    $msg1 = "Bonjour $univ";
    print($msg1 . "<br>");
    $msg2 = "Bonjour {$univ}";
    print($msg2 . "<br>");
    $msg3 = 'Bonjour ' . $univ;
    print("$msg3<br>");
    ?>
    <hr>
    <h4>Nombres</h4>
    <?php
    $nb = 25;
    echo gettype($nb) . "<br>";
    $pi = 3.14;
    echo gettype($pi) . "<br>";
    ?>

    <hr>
    <h4>Booléen</h4>
    <?php
    $isActive = true;
    echo gettype($isActive) . "<br>";

    if ($isActive) {
        echo "Welcome !";
    } else {
        echo " Error !";
    }
    ?>

    <hr>
    <h4>Null</h4>

    <?php
    $user = null;
    if ($user == null) {
        echo "No user <br>";
    }
    ?>

    <hr>
    <h4>Tableaux</h4>
    <?php
    $tab1 = array(1, 2, 3, 4, 5); // array
    // or
    $tab2 = ["a", "b", "c", "d", "e"]; // array
    echo $tab2[2] . '<br>'; // c

    echo "student 1:<br>";
    $student1 = ["Noura", 19, "tunis", true, 13.99, [19.5, 17, 15.5]];
    echo gettype($student1) . "<br>";
    echo "Name: " . $student1[0] . '<br>'; // Noura
    echo "Age: " . $student1[1] . '<br>'; // 19
    echo "Address: " . $student1[2] . '<br>'; // tunis
    echo "Is active: " . $student1[3] . '<br>'; // true
    echo "Moyenne: " . $student1[4] . '<br>'; // 13.99
    echo "<ul>";
    echo "<li>JAVA: " . $student1[5][0] . '</li>'; // 19.5
    echo "<li>PHP: " . $student1[5][1] . '</li>'; // 17
    echo "<li>C#: " . $student1[5][2] . '</li>'; // 15.5
    echo "</ul>";
    echo "student 2:<br>";
    $student2 = [
        "name" => "Noura",
        "age" => 19,
        "address" => "tunis",
        "is_active" => true,
        "moyenne" => 13.99,
        "notes" => [
            "java" => 19.5,
            "php" => 17,
            "bd" => 15.5
        ]
    ];
    echo gettype($student2) . "<br>";
    echo "Name: " . $student2["name"] . '<br>'; // Noura
    echo "Age: " . $student2['age'] . '<br>'; // 19
    echo "Address: " . $student2['address'] . '<br>'; // tunis
    echo "Is active: " . $student2['is_active'] . '<br>'; // true
    echo "Moyenne: " . $student2['moyenne'] . '<br>'; // 13.99
    echo "<ul>";
    echo "<li>JAVA: " . $student2['notes']['java'] . '</li>'; // 19.5
    echo "<li>PHP: " . $student2['notes']['php'] . '</li>'; // 17
    echo "<li>BD: " . $student2['notes']['bd'] . '</li>'; // 15.5
    echo "</ul>";
    ?>

    <hr>
    <h4>Conversions</h4>
    <?php
    $a = '1';
    echo gettype($a) . "<br>";
    $b = (int) $a;
    echo gettype($b) . "<br>";
    $c = (float) $a;
    echo gettype($c) . "<br>";
    $d = (bool) $a;
    echo gettype($d) . "<br>";
    ?>
</body>

</html>