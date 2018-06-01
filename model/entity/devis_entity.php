<?php

// Récupérer les données de tous les devis avec le user et le trek correspondant
function getAllDevis() {
     /* @var $connection PDO */
     global $connection;

    $query = "SELECT 
                devis.*,
                trek.title AS trek,
                concat(user.firstname, ' ', user.lastname) AS user,
                user.pseudo
            FROM devis
            INNER JOIN trek ON trek.id = devis.trek_id
            INNER JOIN user ON user.id = devis.user_id;";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

// Insérer un nouveau devis en BDD
function insertDevis(int $nb_pers, string $date_start, int $date_flex, string $description, int $trek_id, int $user_id) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO devis (nb_pers, date_start, date_flex, description, trek_id, user_id) 
            VALUES (:nb_pers, :date_start, :date_flex, :description, :trek_id, :user_id);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nb_pers", $nb_pers);
    $stmt->bindParam(":date_start", $date_start);
    $stmt->bindParam(":date_flex", $date_flex);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":trek_id", $trek_id);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->execute();
}

// Mettre à jour un devis en BDD - ! A REVOIR
function updateDevis(int $id, int $user, int $trek, int $valid) {
    /* @var $connection PDO */
    global $connection;

    $query = "UPDATE devis
                SET user_id = :user_id,
                    trek_id = :trek_id,
                    valid = :valid

                WHERE devis.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":user_id", $user);
    $stmt->bindParam(":trek_id", $trek);
    $stmt->bindParam(":valid", $valid);
    $stmt->execute();
}