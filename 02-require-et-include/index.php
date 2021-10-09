<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require & include</title>
</head>

<body>
    <?php # include('./date.php') 
    ?>
    <?php require('./date.php') ?>
    <h3>La date d'aujourd'hui</h3>
    <p>On est le <strong><?php echo getCurrentDate('d/m/Y') ?></strong></p>
    <p>On est le <strong><?= getCurrentDate('D d-m-Y') ?></strong></p>
</body>

</html>