<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement des données du formulaire</title>
</head>

<body>
    <h3>Données saisies</h3>
    <ul>
        <li>Username: <strong><?= $_POST['username'] ?></strong></li>
        <li>Password: <strong><?= $_POST['password'] ?></strong></li>
    </ul>
</body>

</html>