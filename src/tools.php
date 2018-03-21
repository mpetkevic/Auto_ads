<?php

function prepare($data)
{
    $result = [];

    if (!empty($data["model_id"])) {
        $result[":model_id"] = (int)$data["model_id"];
    }

    if (!empty($data["price"])) {
        $result[":price"] = (int)$data["price"];
    }

    if (!empty($data["used"])) {
        $result[":is_used"] = (int)$data["used"];
    }

    if (!empty($data["new"])) {
        $result[":is_new"] = (int)$data["new"];
    }

    if (!empty($data["crashed"])) {
        $result[":is_crashed"] = (int)$data["crashed"];
    }

    if (!empty($data["comment"])) {
        $result[":description"] = trim(strip_tags($data["comment"]));
    }

    return $result;
}