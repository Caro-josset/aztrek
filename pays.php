<?php

require_once 'library/functions.php';
require_once 'model/database.php';

// Vérification paramètre "title" dans URL
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];

$pays = getOneDestination($id);
$list_treks = getAllTreksByDestination($id);

getHeader($pays["title"]);
?>

<div class="container">

    <h1><?php echo $pays["title"]; ?></h1>
    <p><?php echo $pays["description"]; ?></p>

    <?php foreach ($list_treks as $trek) : ?>
            <article>
                <h2><?php echo $trek["title"]; ?></h2>
                <img src="uploads/<?php echo $trek["picture"];?>" alt="">
                <ul>
                    <li>à partir de <?php echo $trek["price"]; ?> €</li>
                    <li><?php echo $trek["grade"]; ?>/5</li>
                    <li><?php echo $trek["niveau"]; ?></li>
                </ul>
            </article>
    <?php endforeach; ?> 
</div>





<?php getFooter();  