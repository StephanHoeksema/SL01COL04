<?php
require '../vendor/autoload.php';
/** @var  $qb
 * Query builder with database connection
 * */
$qb = new QueryBuilder(new Connection());
$sql = "SELECT * FROM hobbies WHERE userId =" . $_GET['id'];


$hobbies = $qb->customSelect($sql);

require '../views/hobbies.view.php';