<?php

$sql = "
    select users.id, users.username, MIN(profiles.id) AS profileId, MIN(hobbies.id) AS hobbyId, profiles.description
    from users
    left join  profiles on profiles.id = users.id
    left join hobbies on hobbies.userid = users.id
    group by users.id
";

$users = $qb->customSelect($sql);
//die(var_dump($users));
require 'views/index.view.php';

/**
 * PDO - connect to database
 *
 */