<?php
/**
 * Server variabelen
 * SERVER
 * GET
 * POST
 */
$App = require 'private.php';
$dbconn = $App['database'];

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/details" => "controllers/details.php",
    "/contact" => "controllers/contact.php",
    "/skills" => "controllers/skills.php",

];
//
//if(array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
//    require $routes[$_SERVER['REQUEST_URI']];
//} else {
//    echo "404";
//}
//

/**
 * Routing
 * Waar in de applicatie ben je?
 *
 * Voor het gebruik gaan we er gebruik van maken van de volgende opbouw
 * - index(home)
 * - contact
 * - details
 *      - profiel
 *      - cijfers
 *      - ervaringen
 *      - hobby
 * - about
 */




/**
 * PDO - connect to database
 *
 */


try {
    $conn = new PDO(
        "mysql:host=$dbconn[servername];dbname=$dbconn[dbname]",
        $dbconn['username'],
        $dbconn['drowssap']
    );
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo "<table>";
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . $user['username'] . "</td>
          <td>" . "<a href='hobbies.php?id=". $user['id'] ."'>hobbies</a>" . "</td>";
    echo "<tr>";
}
echo "</table>";
//require 'views/index.view.php';











