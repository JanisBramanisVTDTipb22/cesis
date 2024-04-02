<?php
require "Database.php";
$config = require("config.php");

$db = new Database($config);

if ($_SERVER["REQUEST METHOD"] == "POST") {
    $query = "DELETE FROM posts WHERE id = :id";
    $params = [ ":id" => $_POST["id"]];
    $db->execute($query, $params);
}

header("Locations");
die();