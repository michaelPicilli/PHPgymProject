<?php
session_start();

foreach ($_SESSION as $key => $value) {

    unset($_SESSION[$key]);

}

session_destroy();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrivederci</title>
    <?php include "navbar.html"; ?>

</head>

<body>
    <div class="container">
        <hr>
        <h1>Arrivederci</h1>
        <p>Sei stato disconnesso con successo</p>
        <a href="index.php" class="btn btn-secondary mb-2">Torna alla pagina principale</a>
        <hr>
    </div>






</body>
<footer>
    <?php include "footer.html"; ?>
</footer>

</html>