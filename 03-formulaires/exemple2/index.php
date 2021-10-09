<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
    <div class="container py-3">
        <?php # if (!empty($_POST)) { 
        ?>
        <?php if (!empty($_POST)) : ?>
            <ul class="list-group">
                <li class="list-group-item"><?= $_POST['civilite'] ?></li>
                <li class="list-group-item"><?= $_POST['username'] ?></li>
                <li class="list-group-item"><?= $_POST['phone'] ?></li>
                <li class="list-group-item"><?= $_POST['email'] ?></li>
                <li class="list-group-item"><?= $_POST['password'] ?></li>
            </ul>
            <?php # else { 
            ?>
        <?php else : ?>

            <fieldset>
                <legend>Formulaire d'inscription</legend>
                <form action="" method="post">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">Civilité: &nbsp;&nbsp;
                            <input class="form-check-input" type="radio" name="civilite" id="civilite" value="monsieur"> M.
                            <input class="form-check-input" type="radio" name="civilite" id="civilite" value="madame"> Mme
                            <input class="form-check-input" type="radio" name="civilite" id="civilite" value="mademoiselle"> Mlle
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="username">Nom & prénom</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Nom et prénom ici">
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="(+216)12345678">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="person@example.com">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password ici">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirmer Password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Password ici">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Envoyer" class="btn btn-outline-success">
                        <input type="reset" value="Annuler" class="btn btn-outline-secondary">
                    </div>

                </form>
            </fieldset>
            <?php # } 
            ?>
        <?php endif; ?>
    </div>
</body>

</html>