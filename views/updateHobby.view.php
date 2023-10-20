<?php
require 'partials/head.php';

require 'partials/nav.php';


?>
    <form action="/updateHobby" method="post">
        <input  type="hidden" value="<?= $hobby[0]['id']; ?>">
        <input type="text" value="<?= $hobby[0]['hobby']; ?>">
        <button type="submit">Bewerk</button>
    </form>
<?php

require 'partials/footer.php';

?>