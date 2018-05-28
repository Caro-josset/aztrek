<?php

require_once 'library/functions.php';
require_once 'model/database.php';

// Déclaration des variables

$list_destinations = getAllDestinations();

//debug($list_projects);

//echo "<pre>";
//print_r($list_projects);
//echo "</pre>";

getHeader("Accueil");
?>

    <!-- destinations -->
    <div class="container">

      <section id="destinations">

        <div class="title-container">
          <h1 class="section-title">Destinations du moment</h1>
          <p class="title-p">5 destinations aventure selectionnées pour vous par la communauté AZTREK.</p>
        </div>


        <div class="voyages">

          <div class="owl-carousel">
          <?php foreach ($list_destinations as $destination) : ?>
            <?php include 'include/destination_inc.php'; ?>
        <?php endforeach; ?> 

          <article>
            <a href="#">
            <h2>Guatémala</h2>
            <div><img src="./images/guatemala.jpg" alt="volcan cratère chemin rocheux">
              <div class="legende">
                <a href="#">26 stories</a>
                <a href="#">12 trekkers</a>
              </div>
            </div>
            <p class="price">à partir de 1990 €</p>
            </a>
          </article>

          <article>
            <a href="#">
            <h2>Salvador</h2>
            <div><img src="./images/salvador.jpg" alt="ville colorée église">
              <div class="legende">
                <a href="#">57 stories</a>
                <a href="#">17 trekkers</a>
              </div>
            </div>
            <p class="price">à partir de 1790 €</p>
            </a>
          </article>

          <article>
            <a href="#">
            <h2>Honduras</h2>
            <div><img src="./images/honduras.jpg" alt="barque en bord de mer azure">
              <div class="legende">
                <a href="#">43 stories</a>
                <a href="#">21 trekkers</a>
              </div>
            </div>
            <p class="price">à partir de 1890 €</p>
            </a>
          </article>

          <article>
            <a href="#">
            <h2>Costa Rica</h2>
            <div><img src="./images/costa-rica.jpg" alt="paysage verdoyant">
              <div class="legende">
                <a href="#">26 stories</a>
                <a href="#">19 trekkers</a>
              </div>
            </div>
            <p class="price">à partir de 2890 €</p>
            </a>
          </article>

        </div>

        <div class="slider">

         <?php foreach ($list_destinations as $destination) : ?>
            <?php include 'include/destination_inc.php'; ?>
        <?php endforeach; ?> 

        </div>

        </div>

        <a href="#" class="cta">Voir plus de destinations</a>

      </section>

    </div>

    <!-- stories -->


      <section id="stories">
        <div class="container">

        <header>

          <div class="title-container">
            <h1 class="section-title">Stories</h1>
            <h2>Les préférées</h2>
          </div>

          <article class="header-article">
            <p class="title-p">Vivez leurs aventures comme si vous y étiez. <br>Chaque mois les 3 plus populaires mises en lumière.</p>
            <p>Bientôt la votre ?</p>
          </article>

        </header>

        <div class="stories">

          <article class="stories-bloc">
            <a href="#">
              <p class="hover">GO</p>
            <div class="profil">
              <p>@ludo-trico</p>
              <img src="./images/user-1.jpg" alt="photo dun utilisateur en noir et blanc">
            </div>
            <div class="stories-img"><img src="./images/img-storie-1.jpg" alt="temples aztèque mexicains">
              <div class="stat">
                <p>630</p>
                <p>503</p>
              </div>
            </div>
            <p class="title-storie">Caminando Mexico</p>
            </a>
          </article>

          <article class="stories-bloc">
            <a href="#">
              <p class="hover">GO</p>
            <div class="profil">
              <p>@david-trek</p>
              <img src="./images/user-2.jpg" alt="photo dun utilisateur en noir et blanc">
            </div>
            <div class="stories-img"><img src="./images/img-storie-2.jpg" alt="église jaune et valcan nuageux">
              <div class="stat">
                <p>456</p>
                <p>620</p>
              </div>
            </div>
            <p class="title-storie">10 jours à Salvador</p>
          </a>
          </article>

          <article class="stories-bloc">
            <a href="">
              <p class="hover">GO</p>
            <div class="profil">
              <p>@aurelunion</p>
              <img src="./images/user-3.jpg" alt="photo dun utilisateur en noir et blanc">
            </div>
            <div class="stories-img"><img src="./images/img-storie-3.jpg" alt="piscine naturelle avec un rayon de lumière">
              <div class="stat">
                <p>367</p>
                <p>360</p>
              </div>
            </div>
            <p class="title-storie">Découverte des trésors du Honduras</p>
            </a>
          </article>

        </div>

        <a href="#" class="cta">Ajoutez votre aventure</a>
        </div>
      </section>



    <!-- communauté -->
    <section id="communaute">

      <h1 class="section-title">La communauté AZTREK</h1>

      <p class="title-p">Retrouvez nos membres les plus experimentés sur notre forum de co-trekking.</p>

      <div class="users">

        <article>
          <a href="#">
          <img src="./images/photo-user-hamouch.jpg" alt="photo user noir et blanc">
          <h2>Hamouch_Hamouch</h2>
          <div class="info">
            <p>32 stories</p>
            <p class="level-5">As du trek</p>
          </div>
          </a>  
        </article>

        <article>
          <img src="./images/photo-profil-madbou.png" alt="photo user noir et blanc">
          <h2>c.madbou</h2>
          <div class="info">
            <p>27 stories</p>
            <p class="level-4">Trekker confirmé</p>
          </div>
        </article>

      </div>

      <div class="users-research">
        <p>Entrez votre destination et trouver les trekkers à contacter</p>
        <form class="forum-research">
          <input type="text" placeholder="Trouver mon co-trekker">
          <button class="search-btn" type="submit">Valider</button>
        </form>
      </div>

      <a href="#" class="cta">Accès espace de co-trekking</a>

    </section>

    <!-- actu -->
    <section id="actu">

      <div class="title-container">
        <h1>L'actu</h1>
        <h2>#laventurecommenceici</h2>
      </div>

      <article class="insta">
        <div id="insta-title">
          <h3><strong>astrek</strong></h3>
          <p>caminando Mexico au cours de l'eau</p>
        </div>
        <figure><img src="./images/bg-insta.jpg" alt="fleuve mexicain entre deux montagne">
          <nav class="nav-insta">
            <ul>
              <li><a href="#">aimer</a></li>
              <li><a href="#">commenter</a></li>
            </ul>
          </nav>
          <figcaption>
            <p>aimé par jean-jean, rom_1 et 125 autres personnes</p>
            <p><strong>asterk</strong> #laventurecommenceici #mexique #treklavie #mountain</p>
          </figcaption>
        </figure>

      </article>

      <a href="#" class="cta">Instagram</a>

    </section>

    <!-- concept -->
    <section id="concept">

      <h1 class="section-title">Concept</h1>

      <article>
        <p>La communauté AZTREK vous prpose une platefrome en ligne pour partager vos aventures de trekking. Vous pourrez également retrouver des coéquipiers d’aventure grâce à l’espace de co-trekking.</p>
        <p>AZTEK agence de voyage centrée sur l’utilisateur vous propose égalment un ensemble de voyage conçus pour vous.</p>
      </article>

      <a href="#" class="cta">À propos</a>

    </section>

<?php getFooter();  
