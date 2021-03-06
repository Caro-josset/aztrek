<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire
$id = $_POST["id"];
$title = $_POST["title"];
$description = $_POST["description"];

$destination = getOneEntity("destination", $id);
$picture = !is_null($destination["picture"]) ? $destination["picture"] : ""; // image présente avant update

if ($_FILES["picture"]["error"] == 0) {
    $picture = $_FILES["picture"]["name"];
    // Déplacer le fichier uploadé
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
}

// Insertion des données en BDD
updateDestination($id, $title, $description, $picture);

// Redirection vers la liste
header("Location: index.php");