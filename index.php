<?php
/**
 * Auto loading voor Classes
 */
require 'vendor/autoload.php';

/** @var  $qb
 * Query builder with database connection
 * */
$qb = new QueryBuilder(new Connection());

/** @var  $routes
 * Routes van de applicatie
 * */
$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/details" => "controllers/details.php",
    "/contact" => "controllers/contact.php",
    "/skills" => "controllers/skills.php",

];

/**
 * Laden van de juiste controller
 */
if(array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
    require $routes[$_SERVER['REQUEST_URI']];
} else {
    echo "404";
}







