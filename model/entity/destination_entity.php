<?php

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

function getAllDestinationsEnAvant()
{
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT 
                trek.id,
                trek.price,
                trek.picture,
                trek.destination_id,
                destination.id,
                trek.en_avant,
                destination.title AS pays,
                count(story.id) AS story_nb
            FROM trek
            INNER JOIN destination ON destination.id = trek.destination_id
            LEFT JOIN devis ON devis.trek_id = trek.id
            LEFT JOIN story ON story.devis_id = devis.id
            WHERE trek.en_avant = 1
            GROUP BY trek.id;";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

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

