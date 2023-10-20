<?php
/**
 * Created by: Stephan Hoeksema 2023
 * SL01COL04
 */

$arr = [
    'userid' => $_POST['userid'],
    'hobby' => $_POST['hobby']
];

//die(var_dump($addHobby));

$hobby = $qb->insert('hobbies', $arr);
header("Location: /");