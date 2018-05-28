<?php
    require_once '../../../model/database.php';

// Récupérer les données du formulaire

$title = $_POST["title"];
$description = $_POST["description"];
$picture = "";

// Vérifier si une image est uploadée
if (isset($_FILES["picture"])) {
    $picture = $_FILES["picture"]["name"];
    // Déplacer les fichiers uploadés
    move_uploaded_file($_FILES["picture"]["tmp_name"], "../../../uploads/" . $picture);
}

// Insertion en BDD
insertMember($title, $description, $picture);

// Redirection vers liste des membres
header("Location: index.php");
