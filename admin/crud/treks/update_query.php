<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$id = $_POST["id"];
$pays = $_POST["pays"];
$title = $_POST["title"];
$price = $_POST["price"];
$description = $_POST["description"];
$niveau = $_POST["niveau"];
$en_avant = $_POST["en_avant"];
$destination = getOneEntity("destination", $id);
$picture = !is_null($trek["picture"]) ? $trek["picture"] : ""; // image présente avant update


if ($_FILES["picture"]["error"] == 0) {
    $picture = $_FILES["picture"]["name"];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
}

// Insertion des données en BDD
updateTrek($id, $pays, $title, $price, $description, $niveau, $en_avant, $picture);

// Redirection vers la liste
header("Location: index.php");