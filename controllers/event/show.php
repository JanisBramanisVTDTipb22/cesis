<?php

// Dabūt datus no datu bāzes
require "Database.php";
$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM posts WHERE id = :id";
$params = [":id" => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();

require "views/posts/show.view.php";