<?php
require 'partials/head.php';

require 'partials/nav.php';

?>
<div class="container-fluid">
    <div class="offset-2 col-8">
        <div class="container px-4 py-5" id="featured-3">
            <h2 class="pb-2 border-bottom">Kort overzicht van Profielen</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">


                <?php
                //die(var_dump($users));
                foreach ($users as $user) {
                    ?>
                    <div class="feature col">
                        <h3 class="fs-2 text-body-emphasis"><?= $user['username']; ?></h3>
                        <p>Rose garden cucumbers mice sunflower wheat in pig. In eggplant, quonset is
                            grain bins, grain trucks quonset pole shed, with fences gates zucchini
                            carrots scra.</p>
                        <p>
                            Hobbies: <a href="#"> <i class="bi bi-patch-plus"> Bekijken</i></a>
                        </p>
                        <p>
                            Profiel: <a href="#"><i class="bi bi-person-square"> Bewerken</i></a>
                        </p>

                    </div>
                    <?php
                }

                ?>
            </div>
        </div>
    </div>
</div>

<?php

require 'partials/footer.php';

?>