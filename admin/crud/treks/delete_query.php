<?php

require_once '../../../model/database.php';

$id = $_GET["id"];

deleteEntity("trek", $id);

// header("Location: index.php");


