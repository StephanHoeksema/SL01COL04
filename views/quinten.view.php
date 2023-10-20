<?php
require 'partials/head.php';
require 'partials/nav.php';

foreach ($users as $user) {
    echo $user['username'] . '<br>';
}

?>
    <hr>
    <form action="addUser.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <button type="submit">Add user</button>
    </form>
    <hr>

<?php

require 'partials/footer.php';