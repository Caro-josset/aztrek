<?php

require_once '../../../model/database.php';

// Récupérer les données du formulaire

$user_id = $_POST['user_id'];
$tek_id = $_POST['trek_id'];
$valid = "";

if ($_POST['valid'] == '1'){
    $valid = 1;
}else {
    $valid = 0;
};

// Insertion des données en BDD
updateDevis($user_id, $trek_id, $valid);

// Redirection vers la liste
header("Location: index.php");