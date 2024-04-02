<?php

// Šis fails ir, lai izvadītu datus no datubāzes uz
// lapu

require "./Database.php";


$config = require("./config.php");
//include


$query = "SELECT * FROM posts JOIN categories ON posts.category_id = categories.id";

$params = [];
if (isset($_GET["id"]) && $_GET["id"] != "") {
    $id = $_GET["id"];    
    $query .= " WHERE posts.id=:id";
    $params = [":id" => $id];
}

if (isset($_GET["cat_name"]) && $_GET["cat_name"] != "") {
    if (isset($_GET["id"]) && $_GET["id"] != "") {
        $cat_name = $_GET["cat_name"];
        $query .= " AND name = :cat_name";
        $params = [":id" => $id, ":cat_name" => $cat_name];
    } else {
        $cat_name = $_GET["cat_name"];
        $query .= " WHERE name = :cat_name";
        $params = [":cat_name" => $cat_name];
    }
}

$db = new Database($config);
$posts = $db
            ->execute($query, $params)
            ->fetchAll();


$title = "No!";
require "./views/index.view.php";
?>