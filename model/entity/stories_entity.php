<?php

function getAllStories(int $limit = 999)
{
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT 
                story.*,
                user.pseudo AS user,
                user.picture AS profil_picture,
                trek.title AS title_trek, 
                count(aime.id) AS aime_nb
            FROM story
            INNER JOIN user ON user.id = story.user_id
            INNER JOIN devis ON devis.id = story.devis_id
            INNER JOIN trek ON trek.id = devis.trek_id
            INNER JOIN aime ON aime.story_id = story.id
            WHERE aime.aime = 1
            GROUP BY story.id
            ORDER BY aime_nb DESC;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getOneStory(int $id)
{
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT 
                story.*,
                user.pseudo AS user,
                user.picture AS profil_picture,
                trek.title AS title_trek, 
                count(aime.id) AS aime_nb
            FROM story
            INNER JOIN user ON user.id = story.user_id
            INNER JOIN devis ON devis.id = story.devis_id
            INNER JOIN trek ON trek.id = devis.trek_id
            INNER JOIN aime ON aime.story_id = story.id
            WHERE aime.aime = 1 & story.id = :id
            GROUP BY story.id
            ORDER BY aime_nb DESC;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}