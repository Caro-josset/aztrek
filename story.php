<?php

require_once 'library/functions.php';
require_once 'model/database.php';

// Vérification paramètre "title" dans URL
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}


$id = $_GET["id"];

$story = getOneStory($id);

getHeader($story["title"]);
?>

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

<a href="<?php echo ADMIN_URL ;?>login.php" class="cta">Demander votre devis</a>

</div>

<?php getFooter(); 