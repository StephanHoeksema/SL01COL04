<?php
require 'partials/head.php';

require 'partials/nav.php';
foreach ($profiles as $profile) :

    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="offset-2 col-8">
                <h2 class="h2">Profile <?= $profile['firstname'] ?></h2>
                <form>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="email" class="form-control" value="<?= $profile['email']; ?>"/>
                        <label class="form-label" for="email">Email address</label>
                    </div>

                    <!-- FIRSTNAME input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="firstname" class="form-control" value="<?= $profile['firstname']; ?>"/>
                        <label class="form-label" for="firstname">Firstname</label>
                    </div>

                    <!-- LASTNAME input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="lastname" class="form-control" value="<?= $profile['lastname']; ?>"/>
                        <label class="form-label" for="lastname">Lastname</label>
                    </div>

                    <!--                <div class="form-outline mb-4">-->
                    <!--                    <input type="password" id="form1Example2" class="form-control" />-->
                    <!--                    <label class="form-label" for="form1Example2">Password</label>-->
                    <!--                </div>-->

                    <!-- 2 column grid layout for inline styling -->
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block">Werk bij</button>
                </form>
            </div>
        </div>
    </div>
<?php
endforeach;

require 'partials/footer.php';

