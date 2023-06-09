<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso</title>
    <?php
    include 'navbar.html';
    ?>
    <link rel="stylesheet" href="Accessp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body>
    <div id="main-wrapper" class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="mb-5">
                                        <h3 class="h4 font-weight-bold text-theme">Login</h3>
                                    </div>

                                    <h6 class="h5 mb-0">Ben Tornato !!</h6>
                                    <p class="text-muted mt-2 mb-5">Inserisci il nome utente e la password per accedere
                                    </p>

                                    <form method="post" action="db_Accesso.php">

                                        <div class="">
                                            <label for="email_utente">Email Utente</label>
                                            <input type="text" class="form-control" id="email_utente"
                                                name="email_utente">
                                        </div>

                                        <div class=" mb-5">
                                            <label for="password_utente">Password</label>
                                            <input type="password" class="form-control" id="id_password_utente"
                                                name="password_utente">
                                        </div>
                                        <button type="submit" class="btn btn-secondary ">Login</button>
                                        <div class="">
                                            <p class="text-muted text-center mt-3 mb-0">Non sei già Registrato ?<a
                                                    href="Registrazione.php"
                                                    class="btn btn-secondary rounded-pill ms-2 ">Registrati</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="p-5">
                                    <img src="accesso_img.jpeg" height="400" width="400" alt="GYM IMG">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->



                <!-- end row -->

            </div>
            <!-- end col -->
        </div>
        <!-- Row -->
    </div>
</body>

<footer>
    <?php
    include 'footer.html';
    ?>
</footer>

</html>