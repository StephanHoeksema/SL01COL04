<?php
/**
 * Created by: Stephan Hoeksema 2023
 * SL01COL04
 */

$App = require 'private.php';
$dbconn = $App['database'];


try {
    $conn = new PDO(
        "mysql:host=localhost;dbname=profileApp",
        'root',
        'Blub!976'
    );
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$id = $_GET['id'];

$sql = "select * from profiles where id = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$profile = $stmt->fetch(PDO::FETCH_ASSOC);

if ($profile != false ) {
    require 'views/profiles.view.php';
} else {
    echo "Leeg";
}