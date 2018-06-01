
<?php

require_once '../../library/functions.php';
require_once '../../model/database.php';

// Déclaration des variables

$list_interests = getAllEntity("interest");
$url = $_SERVER['HTTP_REFERER'];

?>

<html>
    <head>
        <meta charset="utf-8">
            <title>Admin</title>
            <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"/>
            <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css"/>
            <link rel="stylesheet" href="../node_modules/datatables/media/css/jquery.dataTables.min.css"/>
            <link rel="stylesheet" href="../node_modules/select2/dist/css/select2.min.css">
            <link rel="stylesheet" href="../node_modules/summernote/dist/summernote.css">
            <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
            <link rel="stylesheet" href="../css/dashboard.css">
            <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
<div class="container">
<h1>Création d'un compte Trekker</h1>

<!-- Formulaire de Création d'un trek -->
<form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="firstname" class="form-control">
    </div>
    <div class="form-group">
        <label for="lastname">Nom</label>
        <input type="text" id="lastname" name="lastname" class="form-control">
    </div>
    <div class="form-group">
        <label for="picture">Photo de profil</label>
        <input type="file" id="picture" name="picture" class="form-control" accept="image/*">
    </div>
    <div class="form-group">
        <label for="country">Pays</label>
        <input type="text" id="country" name="country" class="form-control">
    </div>
    <div class="form-group">
        <label for="town">Ville</label>
        <input type="text" id="town" name="town" class="form-control">
    </div>
    <div class="form-group">
        <label for="postal_code">Code postal</label>
        <input type="number" id="postal_code" name="postal_code" class="form-control">
    </div>
    <div class="form-group">
        <label for="about">À propos</label>
        <textarea name="about" id="about" cols="30" rows="10" class="form-control"></textarea>
    </div>

        <input type="hidden" name="url" value="<?php echo $url; ?>">
    <!-- Envoi du formulaire en BDD -->
    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Enregistrer</button>
</form>
</div>
</body>

    <footer>
        <script src="../node_modules/jquery/dist/jquery.min.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../node_modules/select2/dist/js/select2.min.js"></script>
        <script src="../node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
        <script src="../node_modules/summernote/dist/summernote.min.js"></script>
        <script src="../node_modules/summernote/dist/summernote-bs4.min.js"></script>
        <script src="../js/admin.js"></script>
    </footer>
</html>