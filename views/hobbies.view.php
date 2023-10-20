<?php
require 'partials/head.php';

require 'partials/nav.php';

?>
<div class="container-fluid">
    <div class="row">
        <div class="offset-2 col-8">
            <h1>Hobbies</h1>
            <p>
                <a href="updateHobby"></a>
                <?php
                foreach ($hobbies

                as $hobby) {
                ?>
                <?= $hobby['hobby']; ?>
            <form action="/updateHobby" method="post">
                <input type="hidden" name="hobbyId" value="<?= $hobby['id']; ?>">
                <button type="submit">Bewerk</button>
            </form>
            <br>
            <?php
            }
            ?>
            </p>
            <form action="/addHobby" method="post">
                <input type="hidden" name="userid" value="<?= $hobby['userid']; ?>">

                <label for="hobby">Hobby</label>
                <input type="text" name="hobby" id="hobby" value="hobby">

                <button type="submit">Voeg toe</button>
            </form>

        </div>
    </div>
</div>
<?php

require 'partials/footer.php';

?>