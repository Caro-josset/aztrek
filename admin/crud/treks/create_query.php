<?php
    require_once '../../../model/database.php';

// Récupérer les données du formulaire

$pays = $_POST["destination_id"];
$title = $_POST["title"];
$price = $_POST["price"];
$description = $_POST["description"];
$niveau = $_POST["niveau_id"];
$en_avant = isset($_POST["en_avant"]) ? 1 : 0;
$picture = "";

// Vérifier si une image est uploadée
if (isset($_FILES["picture"])) {
    $picture = $_FILES["picture"]["name"];
    // Déplacer les fichiers uploadés
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
}

// Insertion en BDD
insertTrek($pays, $title, $price, $description, $niveau, $en_avant, $picture);

// Redirection vers liste des membres
header("Location: index.php");
