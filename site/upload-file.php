<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <?php include_once('header.php'); ?>
        <h1>Contactez nous</h1>

        <form action="submit_contact.php" method="POST" enctype="multipart/form-data">
    <!-- Ajout des champs email et message -->
    [...]
    <!-- Ajout champ d'upload ! -->
    <div class="mb-3">
        <label for="screenshot" class="form-label">Votre capture d'écran</label>
        <input type="file" class="form-control" id="screenshot" name="screenshot" />
    </div>
    <!-- Fin ajout du champ -->
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
        <br />
    </div>

    <?php include_once('footer.php'); ?>
</body>

</html>