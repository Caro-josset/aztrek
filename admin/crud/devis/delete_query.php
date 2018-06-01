<?php

require_once '../../../model/database.php';

$id = $_GET["id"];

deleteEntity("devis", $id);

header("Location: index.php");


