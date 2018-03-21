<?php
define('SOURCE_DIRECTORY', realpath(__DIR__ . "/../src"));
require_once(SOURCE_DIRECTORY . "/database.php");

/**
 *
 */
function main() {
    $makers = getMakers();
    $list = getList();

    require_once(SOURCE_DIRECTORY . "/view_index.php");
}

/**
 *
 *
 * @param $data
 */
function add($data)
{
    require_once(SOURCE_DIRECTORY . "/tools.php");

    $result = prepare($data);

    addToBase($result);
    header('Location: http://miroslavpetkevic.ru/auto_ads/public_html/');
}

/**
 *
 *
 * @param $makerId
 */
function get($makerId)
{
    $list = getModelsForMaker($makerId);

    header('Content-Type: application/json');
    echo json_encode($list);
}

if (!empty($_GET["maker_id"])) {
    get($_GET["maker_id"]);
} elseif (!empty($_POST)) {
    add($_POST);
} else {
    main();
}