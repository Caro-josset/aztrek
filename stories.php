<?php

require_once 'library/functions.php';
require_once 'model/database.php';

// Définition des variables
$list_stories = getAllStories(999); // Voir pour rectifier la limite de publication

getHeader("Stories");
?>

<!-- Affichage dynamique des données de l'ensemble des stories -->
<div class="container">

<?php foreach ($list_stories as $story) : ?>
    <article class="stories-bloc">
            <a href="story.php?id=<?php echo $story["id"];?>" action="<?php setViewsNumber(); ?>">
              <p class="hover">GO</p>
            <div class="profil">
              <p>@<?php echo $story["user"]; ?></p>
              <img src="uploads/<?php echo $story["profil_picture"]; ?>" alt="photo d'un utilisateur en noir et blanc">
            </div>
            <div class="stories-img"><img src="uploads/<?php echo $story["picture"]; ?>" alt="">
              <div class="stat">
                <p><?php echo $story["aime_nb"]; ?></p>
                <p>503</p>
              </div>
            </div>
            <p class="title-storie"><?php echo $story["title_trek"]; ?></p>
            </a>
          </article>
<?php endforeach; ?>

</div>

<?php getFooter();  