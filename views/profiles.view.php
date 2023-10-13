
<?php
require 'partials/head.php';

require 'partials/nav.php';

?>
<div class="container-fluid">
    <div class="row">
        <div class="offset-2 col-8">
            <?php

            echo "<H1>PROFIEL van " . $profile['firstname'] . "</H1>"
                . $profile['email'] . "<br>";

            ?>
        </div>
    </div>
</div>
<?php

require 'partials/footer.php';

?>