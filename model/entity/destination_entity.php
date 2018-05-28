<?php

function getAllDestinations(int $limit = 999)
{
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT 
                trek.id,
                trek.price,
                trek.picture AS picture,
                trek.destination_id,
                destination.id,
                trek.en_avant,
                destination.title AS pays
            FROM trek
            INNER JOIN destination ON destination.id = trek.destination_id
            WHERE trek.en_avant = 1;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getOneDestination() {
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

