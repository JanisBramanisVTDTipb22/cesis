<?php

require "Database.php";
$config = require("config.php");
$db = new Database($config);                     

//if ($_SERVER["REQUEST_METHOD"] == "POST" && trim($_POST["adrians"]) !="" && $_POST["category-id"] <= 3 && strlen($_POST["adrians"]) <=225)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    if (trim($_POST["title"]) == "") {
        $errors["title"] = "cannot be empty";
    }
    if (strlen($_POST["title"]) > 255) {
        $errors["title"] = "too long";
    }
    if ($_POST["category-id"] < 1 || $_POST["category-id"] > 3) {
        $errors["category-id"] = "category ID invalid";
    }

    if (empty($errors)) {
        
    $query = "INSERT INTO posts (title, category_id) 
        VALUES (:title, :category_id);";
        $params = [
            ":title" => $_POST["title"],
            ":category_id" => $_POST["category-id"]
        ];
    $db->execute($query, $params);

    header("Location: /");
    die();
 }
}
//dd($_SERVER);

$title = "cancer";
require "views/posts/create.view.php";