
<?php
require 'partials/head.php';

require 'partials/nav.php';

?>
<div class="container-fluid">
    <div class="row">
        <div class="offset-2 col-8">
            <h1>Hello, ADSD!</h1>
            <p>
                <?php
                echo "<table>";
                foreach ($users as $user) {

                    echo "<tr>";
                    echo "<td>" . $user['username'] . "</td>
                          <td>" . "<a href='hobbies.php?id=" . $user['id'] . "'>hobbies</a>" . "</td>
                          <td>" . "<a href='profiles.php?id=" . $user['id'] . "'>profile</a>" . "</td>";
                    echo "<tr>";
                }
                echo "</table>";
                ?>
            </p>
        </div>
    </div>
</div>
<?php

require 'partials/footer.php';

?>