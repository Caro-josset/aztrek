<?php

require_once 'library/functions.php';
require_once 'model/database.php';

// Vérification paramètre "title" dans URL
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

// Définition des variables
$id = $_GET["id"];

$trek = getOneTrek($id);
$user = currentUser();
$devis = getAllEntity("devis");

// debug($devis);

// debug($user);

getHeader($trek["title"]);
?>

<!-- Afiichage dynamique des données liées au trek  -->
<div class="container">

    <h1>
        <?php echo $trek["title"]; ?>
    </h1>
    <article>
        <?php echo $trek["description"]; ?>
    </article>

    <aside>
            <img src="uploads/<?php echo $trek["picture"];?>" alt="">
            <ul>
                <li>à partir de
                    <?php echo $trek["price"]; ?> €</li>
                <li>
                    <?php echo $trek["grade"]; ?>/5</li>
                <li>
                    <?php echo $trek["niveau"]; ?>
                </li>
            </ul>
    </aside>

<!-- formulaire de demande de devis -->
<h2>Demander votre devis sur-mesure</h2>
<div class="form-container">
    <form action="create_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nb_pers">Nombre de trekkers</label>
        <input type="number" id="nb_pers" name="nb_pers" class="form-control">
    </div>
    <div class="form-group">
        <label for="date_start">Date de départ</label>
        <input type="date" id="date_start" name="date_start" class="form-control">
    </div>
    <div class="form-group">
        <label for="date_flex">Flexibilité de départ ?</label><br>
        Oui <input type="checkbox" id="date_flex" name="date_flex" class="form-control" value="1">
        Non <input type="checkbox" id="date_flex" name="date_flex" class="form-control" value="0">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <input type="hidden" name="user_id" value="<?php echo $user["id"]; ?>">
    <input type="hidden" name="trek_id" value="<?php echo $trek["id"]; ?>">

<!-- Envoi du formulaire en BDD -->
    <button type="submit" class="cta">Demander votre devis</button>
</form>
</div>

</div>



    <?php getFooter();