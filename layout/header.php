<?php
require_once __DIR__ . '/../library/functions.php';
$utilisateur = currentUser();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Site de voyage communautaire. Venez partager vos aventures et préparer votre trek grace a notre communuté de trekkers. Tester le co-trekking et partez en équipe.">
  <meta name="keywords" content="Trek trekking montagne partage randonnée aventure communauté avis">
  <meta name="viewport" content="width=device-width,minimum-scale=1">
  <title><?php echo $title; ?> | AZTREK</title>
  <link rel="stylesheet" href="./css/jquery.sidr.light.min.css">
  <link rel="stylesheet" href="./css/owl.carousel.min.css">
  <link rel="stylesheet" href="./css/owl.theme.default.css">
  <!-- typos -->
  <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

  <header id="main-header">

    <!-- en-tête -->
    <div id="header-title">
      <a href="index.php"><img src="./images/logo-blanc.svg" alt="le logo Aztrek de couleur blanche"></a>
      <h1>Votre aventure commence ici</h1>
    </div>

    <!-- recherche -->
    <form class="search-form">
      <input type="text" placeholder="Recherche">
      <button class="search-btn" type="submit">Valider</button>
    </form>

    <!-- navigation -->
    <?php getMenu(); ?>


    <!-- carte svg -->
    <?php 
        if ($title == "Accueil") {
            getMap(); 
        } else {
            "";
        }
    ?>

    <!-- navigation bas header -->
    <div class="nav-bottom">
      <a href="<?php echo ADMIN_URL ;?>login.php" class="cta">Rejoindre la communauté</a>
      <?php if (!isset($utilisateur["id"])) : ?>
          <a href="<?php echo ADMIN_URL ;?>" class="log">login</a>
      <?php else: ?>
        <?php if ($utilisateur["admin"] == 1) : ?>
          <a href="<?php echo ADMIN_URL ;?>" class="connect">Mon Compte</a>
          <?php else: ?>
          <a href="#" class="connect">Mon Compte</a>
          <?php endif; ?>
          <a href="<?php echo ADMIN_URL ;?>logout.php" class="cta">Deconnexion</a>
      <?php endif; ?>
    </div>

  </header>

  <main>