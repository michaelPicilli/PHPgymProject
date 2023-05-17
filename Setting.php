<?php
session_start();

if (isset($_SESSION['Logged_in']) && $_SESSION['Logged_in'] === true) {

} else {
    header("Location:Accesso.php");

}




?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Setting profile</title>
    <?php include 'navbar.html'; ?>
    <style>
        body {
            margin-top: 20px;
        }

        .avatar {
            width: 200px;
            height: 200px;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>

</body>
<div class="container bootstrap snippets bootdey">
    <h1 class="text-secondary"><strong>Setting profile </strong></h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
                   <!-- edit table with data -->

        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info">

            <h3>Personal info</h3>

            <form class="form-horizontal" method="post" action="aggiornamento_profilo.php">
                <div>
                    <label for="nome_utente">Nome Utente</label>
                    <input type="text" class="form-control" id="nome_utente" name="nome_utente" required>
                </div>
                <div>
                    <label for="cognome_utente">Cognome Utente</label>
                    <input type="text" class="form-control" id="cognome_utente" name="cognome_utente" required>
                </div>
                <div>
                    <label for="email_utente">Email Utente</label>
                    <input type="email" class="form-control" id="email_utente" name="email_utente" required>
                </div>
                <div>
                    <label for="password_utente">Password</label>
                    <input type="password" class="form-control" id="id_password_utente" name="password_utente" required>
                </div>
                <div>
                    <label for="peso_utente">Peso Corporeo</label>
                    <input type="number" class="form-control" name="peso_utente" id="peso_utente" placeholder="Kg" min="40" max="200"
                        required>
                </div>
                <div class="mb-3">
                    <label for="altezza_utente">Altezza</label>
                    <input type="number" class="form-control" name="altezza_utente" id="altezza_utente" placeholder="cm" min="140" max="300"
                        required>
                </div>
                <button type="submit" class="btn btn-secondary">Aggiorna</button>
                <a href="delete_profile.php" class="btn btn-danger">Elimina Profilo</a>
            </form>
        </div>
    </div>
</div>
<hr>
<footer>
    <?php
    include 'footer.html';
    ?>
</footer>

</html>