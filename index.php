<?php
/**
 * Auto loading voor Classes
 */
require 'core/Connection.php';
require 'models/QueryBuilder.php';
/** @var  $qb
 * Query builder with database connection
 * */
$qb = new QueryBuilder(new Connection());

/** @var  $routes
 * Routes van de applicatie
 * */
$routes = [
    "/" => "controllers/index.php",
    "/hobbies" => "controllers/hobbies.php",
    "/addHobby" => "controllers/addHobby.php",
    "/updateHobby" => "controllers/updateHobby.php",
    "/profiles" => "controllers/profiles.php",
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

//$conn = new Connection();


//$sql = "select * from users order by updated_at desc LIMIT 4";
//
//$stmt = $conn->conn->prepare($sql);
//$stmt->execute();
//$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
////foreach ($users as $user) {
////
////}
//
//require 'views/quinten.view.php';
//
//
