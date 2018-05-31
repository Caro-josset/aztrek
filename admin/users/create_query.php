<?php
    require_once '../../model/database.php';

// Récupérer les données du formulaire

$pseudo = $_POST["pseudo"];
$email = $_POST["email"];
$password = $_POST["password"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$picture = $_FILES["picture"]["name"];
$country = $_POST["country"];
$town = $_POST["town"];
$postal_code = $_POST["postal_code"];
$about = $_POST["about"];

$url = $_POST["url"];


// Déplacer les fichiers uploadés
move_uploaded_file($_FILES["picture"]["tmp_name"], "../../uploads/" . $picture);

// Insertion en BDD
insertUser($pseudo, $email, $password, $firstname, $lastname, $picture, $country, $town, $postal_code, $about);

// Redirection vers liste des membres
header("Location: " . $url);
