<?php
    require_once 'model/database.php';
    require_once 'library/functions.php';

// Récupérer les données du formulaire

$nb_pers = $_POST["nb_pers"];
$date_start = $_POST["date_start"];
$date_flex = "";
$description = $_POST["description"];
$trek_id = $_POST["trek_id"];
$user_id = $_POST["user_id"];

if ($_POST['date_flex'] == '1'){
    $date_flex = 1;
}else {
    $date_flex = 0;
};

// Insertion en BDD
insertDevis($nb_pers, $date_start, $date_flex, $description, $trek_id, $user_id);

// Redirection vers liste treks
header("Location: index.php");