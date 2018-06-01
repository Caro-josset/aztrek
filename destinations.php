<?php

require_once 'library/functions.php';
require_once 'model/database.php';

// Définition des variables
$list_pays = getAllEntity("destination");

getHeader("Destinations");
?>

<!-- Afficher la liste des tous les pays -->
<div class="container">

    <?php foreach ($list_pays as $pays) : ?>
        <a href="pays.php?id=<?php echo $pays["id"];?>">
            <h2><?php echo $pays["title"]; ?></h2>
            <img src="uploads/<?php echo $pays["picture"];?>" alt="">
        </a>
    <?php endforeach; ?>

</div>

<?php getFooter();  