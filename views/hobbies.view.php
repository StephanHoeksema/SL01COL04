
<?php
require 'partials/head.php';

require 'partials/nav.php';

?>
<div class="container-fluid">
    <div class="row">
        <div class="offset-2 col-8">
            <h1>Hobbies</h1>
            <p>
                <?php
                foreach ($hobbies as $hobby) {
                    echo $hobby['hobby'] . "<br>";
                }
                ?>
            </p>
        </div>
    </div>
</div>
<?php

require 'partials/footer.php';

?>