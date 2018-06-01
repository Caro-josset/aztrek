<?php

require_once 'library/functions.php';
require_once 'model/database.php';

// Vérification paramètre "title" dans URL
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

// Définition des variables
$id = $_GET["id"];

$story = getOneEntity("story", $id);

getHeader($story["title"]);
?>

<!-- affichage dynamique des données liées à la story -->
<div class="container">

<h1>
    <?php echo $story["title"]; ?>
</h1>
<article>
    <h2></h2>
    <?php echo $story["description"]; ?>
</article>

<aside>
        <img src="uploads/<?php echo $story["picture"];?>" alt="">

</aside>

</div>

<?php getFooter(); 