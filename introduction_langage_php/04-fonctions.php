<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions</title>
</head>

<body>
    <?php
    function hello($name)
    {
        return "Bonjour $name";
    }
    echo hello("Jean");
    echo "<br>";
    function hello2(string $name): string
    {
        return "Bonjour $name";
        // return ["Bonjour $name"];
    }
    echo hello2("Jean");
    echo "<br>";
    function hello3(string $name = null): ?string
    {
        if ($name != null) {
            return "Bonjour $name";
        }
        return null;
    }
    echo hello3();
    echo "<br>";
    ?>
</body>

</html>