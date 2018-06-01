<?php

// Récupérer les données de tous les treks avec la destination et le niveau associé
function getAllTreks()
{
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT 
                trek.*,
                destination.title AS pays,
                niveau.label AS niveau
            FROM trek
            INNER JOIN destination ON destination.id = trek.destination_id
            LEFT JOIN niveau ON niveau.id = trek.niveau_id;";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

// Récupérer les données d'une trek selon son id
function getOneTrek(int $id)
{
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT 
                trek.*,
                niveau.label AS niveau,
                round(avg(notation.grade),0) AS grade
            FROM trek
            LEFT JOIN niveau ON niveau.id = trek.niveau_id
            LEFT JOIN notation ON notation.trek_id = trek.id
            WHERE trek.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

// Récupérer les données de tous les treks qui sont "en avant"
function getAllDestinationsEnAvant()
{
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT 
                trek.id AS trek,
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

// Recupérer les données de tous les treks selon l'id de la destination 
// avec leur note moyenne, leur niveau, le nbr de stories, le nbr de treks
function getAllTreksByDestination(int $id)
{
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT 
                trek.id AS trek,
                trek.title AS title,
                trek.price AS price,
                trek.description AS description,
                niveau.label AS niveau,
                trek.picture,
                round(avg(notation.grade),0) AS grade,
                count(trek.id) AS trek_nb,
                count(story.id) AS story_nb
            FROM trek
            LEFT JOIN notation ON notation.trek_id = trek.id
            LEFT JOIN devis ON devis.trek_id = trek.id
            LEFT JOIN story ON story.devis_id = devis.id
            LEFT JOIN niveau ON niveau.id = trek.niveau_id
            WHERE trek.destination_id = :id
            GROUP BY trek.id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

// Récupérer toutes données de la table niveau
function getAllNiveaux() {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM niveau;";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

// Insérer un nouveau trek en BDD
function insertTrek(string $pays, string $title, int $price, string $description, int $niveau, int $en_avant, string $picture) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO trek (destination_id, title, price, description, niveau_id, en_avant, picture) 
            VALUES (:destination_id, :title, :price, :description, :niveau_id, :en_avant, :picture);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":destination_id", $pays);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":price", $price);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":niveau_id", $niveau);
    $stmt->bindParam(":en_avant", $en_avant);
    $stmt->bindParam(":picture", $picture);
    $stmt->execute();
}

// Mettre à jour les données d'un trek
function updateTrek(int $id, string $pays, string $title, int $price, string $description, int $niveau, int $en_avant, string $picture) {
    /* @var $connection PDO */
    global $connection;

    $query = "UPDATE trek
                SET destination_id = :destination_id,
                    title = :title,
                    price = :price,
                    description = :description,
                    niveau_id = :niveau_id,
                    en_avant = :en_avant,
                    picture = :picture
            WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":destination_id", $pays);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":price", $price);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":niveau_id", $niveau);
    $stmt->bindParam(":en_avant", $en_avant);
    $stmt->bindParam(":picture", $picture);
    $stmt->execute();
}