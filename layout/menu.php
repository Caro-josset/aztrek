
<?php 

$list_destinations = getAllDestinations(); 

;?>

<div id="nav-container">
      <a id="nav-toggle" href="#sidr">Toggle menu</a>
      <nav id="sidr" class="main-nav">
        <button id="close-btn" type="button">Close</button>
        <ul>
          <li><a href="index.php" id="home" class="title-nav">Accueil</a></li>
          <li class="has-sub"><a href="#" class="title-nav">Destinations</a>
            <ul class="dropdown">
            <?php foreach ($list_destinations as $destination) : ?>
              <li><a href="pays.php?id=<?php echo $destination["id"];?>"><?php echo $destination["title"];?></a></li>
            <?php endforeach; ?> 
            </ul>
          </li>
          <li class="has-sub"><a href="communaute.php" class="title-nav">Communauté</a>
            <ul class="dropdown">
              <li><a href="#">Rejoindre</a></li>
              <li><a href="#">Membres</a></li>
              <li><a href="#">Espace de co-trekking</a></li>
            </ul>
          </li>
          <li><a href="stories.php" class="title-nav">Stories</a></li>
          <li><a href="a-propos.php" class="title-nav">À propos</a></li>
        </ul>
      </nav>
    </div>
