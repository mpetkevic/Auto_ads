<?php
$pdo = null;

function connect()
{
    global $pdo;

    if ($pdo !== null) {
        return $pdo;
    }

    $config = include("config.php");

    $pdo = new PDO(
        sprintf('mysql:host=%s;dbname=%s', $config["db"]["host"], $config["db"]["dbname"]),
        $config["db"]["username"],
        $config["db"]["password"]
    );
    return $pdo;
}

function getList()
{
    $pdo = connect();

    $sql = "SELECT mk.title maker, mo.title model, a.*
            FROM ads a
            INNER JOIN models mo ON mo.id=a.model_id
            INNER JOIN makers mk ON mk.id=mo.maker_id
            WHERE 1
            LIMIT 10;";

    $statement = $pdo->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}


function getMakers()
{
    $pdo = connect();

    $sql = "SELECT * FROM makers WHERE 1 ORDER BY title;";

    $statement = $pdo->prepare($sql);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getModelsForMaker($makerId)
{
    $pdo = connect();

    $sql = "SELECT id, title FROM models WHERE maker_id=:maker_id;";

    $statement = $pdo->prepare($sql);
    $statement->bindParam(":maker_id", $makerId, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function addToBase($data)
{
    $pdo = connect();

    $sql = "INSERT INTO ads (model_id, price, is_used, is_new, is_crashed, description)
            VALUES (:model_id, :price, :is_used, :is_new, :is_crashed, :description);";

    $statement = $pdo->prepare($sql);

    foreach ($data as $key => $value) {
        $statement->bindValue($key, $value);
    }

    $statement->execute();
}