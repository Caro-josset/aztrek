<?php

function getUserByEmailPassword(string $email, string $password) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM user
            WHERE email = :email
            AND password = SHA1(:password);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    return $stmt->fetch();
}

function getAllUsers(int $limit = 999) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT 
                user.id,
                user.pseudo,
                user.firstname,
                user.lastname,
                concat(user.firstname, ' ', user.lastname) AS fullname,
                user.picture,
                level_user_id AS grade,
                count(story.id) AS story_nb
            FROM user
            left JOIN story ON story.user_id = user.id
            INNER JOIN level_user ON level_user.id = user.level_user_id
            GROUP BY user.id
            ORDER BY story_nb DESC
            LIMIT :limit;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getOneUser(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM user
            WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertUser(string $pseudo, string $email, string $password, string $firstname, string $lastname, string $picture, string $country, string $town, int $postal_code, string $about) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO user (pseudo, email, password, firstname, lastname, picture, country, town, postal_code, about)
            VALUES (:pseudo, :email, SHA1(:password), :firstname, :lastname, :picture, :country, :town, :postal_code, :about);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":pseudo", $pseudo);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":picture", $picture);
    $stmt->bindParam(":country", $country);
    $stmt->bindParam(":town", $town);
    $stmt->bindParam(":postal_code", $postal_code);
    $stmt->bindParam(":about", $about);
    $stmt->execute();
}