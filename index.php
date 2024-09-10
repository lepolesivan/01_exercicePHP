<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>

<body>
    <h1>Formulaire de contact</h1>
    <form action="" method="POST">
        <div class="form-group">
            <label for="city">Ville :</label>
            <input type="text" class="form-control" name="city" 
            placeholder="Entrez le nom de votre ville" 
            value="<?php echo isset($_POST['city']) ? htmlspecialchars($_POST['city']) : '' ?>">
        </div>

        <div class="form-group">
            <label for="postalCode">Code postal</label>
            <input type="number" class="form-control" name="postalCode" 
            placeholder="Entrez votre code postal"
            value="<?php echo isset($_POST['postalCode']) ? htmlspecialchars($_POST['postalCode']) : '' ?>">
        </div>

        <div class="form-group">
            <label for="adress">Adresse</label>
            <input type="text" class="form-control" name="adress" 
            placeholder="Entrez votre adresse"
             value="<?php echo isset($_POST['adress']) ? htmlspecialchars($_POST['adress']) : '' ?>">
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</body>

</html>