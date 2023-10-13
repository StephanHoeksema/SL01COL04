<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>ADSD!</title>
</head>

<body>
<?php require 'partials/nav.php'; ?>
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

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>