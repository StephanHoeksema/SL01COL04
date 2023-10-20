<?php
/**
 * Created by: Stephan Hoeksema 2023
 * SL01COL04
 */
require 'core/Connection.php';
$conn = new Connection();

$username = $_POST['username'];

$sql = "insert into users (username) value ('$username')";

$stmt = $conn->conn->prepare($sql);
$stmt->execute();
header('Location: /');
