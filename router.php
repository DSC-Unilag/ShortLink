<?php 
require "./vendor/autoload.php";

$routes = [
  "/" => "index.php",
  "/about" => "about.php",
  "/dashboard/:id" => "dashboard"
];
?>