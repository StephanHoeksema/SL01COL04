<?php
/**
 * update hobby
 */
//die(var_dump($_POST));

$sql = "SELECT * FROM hobbies WHERE id =" . $_POST['hobbyId'] . "";
$hobby = $qb->customSelect($sql);

require 'views/updateHobby.view.php';
