<?php
require '../vendor/autoload.php';
/** @var  $qb
 * Query builder with database connection
 * */
$qb = new QueryBuilder(new Connection());
$sql = "SELECT * FROM profiles WHERE id =" . $_GET['id'];


$profiles = $qb->customSelect($sql);
require '../views/profiles.view.php';