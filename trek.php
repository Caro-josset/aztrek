<?php

require_once 'library/functions.php';
require_once 'model/database.php';

// Vérification paramètre "title" dans URL
if (!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
    header("Location: 404.php");
}


$id = $_GET["id"];

$trek = getOneTrek($id);

getHeader($trek["title"]);
?>

<div class="container">

    <h1>
        <?php echo $trek["title"]; ?>
    </h1>
    <article>
        <?php echo $trek["description"]; ?>
    </article>

    <aside>
        <a href="trek.php?id=<?php echo $trek["trek"];?>">
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
        </a>
    </aside>
    
    <a href="<?php echo ADMIN_URL ;?>login.php" class="cta">Demander votre devis</a>

</div>



    <?php getFooter();