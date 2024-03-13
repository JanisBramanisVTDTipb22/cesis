<?php

require "functions.php";

$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];
//dd(parse_url($_SERVER["REQUEST_URI"]));

if ($url == "/") {
    require "controllers/index.php";
}


if ($url == "/about") {
    require "controllers/about.php";
}

if ($url == "/story") {
    require "controllers/story.php";
}

?>