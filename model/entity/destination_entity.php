<?php

// Récuperer toutes les données de la table destination
function getAllDestinations()
{
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM destination;";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

// Récuperer toutes les données d'un pays selon son id
function getOneDestination(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM destination
            WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

// Insérer une nouvelle destination en BDD
function insertDestination(string $title, string $description, string $picture) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO destination (title, description, picture) 
            VALUES (:title, :description, :picture);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":picture", $picture);
    $stmt->execute();
}

// Mettre à jour une destination en BDD
function updateDestination(int $id, string $title, string $description, string $picture) {
    /* @var $connection PDO */
    global $connection;

    $query = "UPDATE destination
                SET title = :title,
                description = :description,
                picture = :picture
            WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":picture", $picture);
    $stmt->execute();
}

