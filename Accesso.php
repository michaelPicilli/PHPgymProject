<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesso/Registrazione</title>
    <?php
    include 'navbar.html';
    ?>
    <link rel="stylesheet" href="Accessp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

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
                                    <p class="text-muted mt-2 mb-5">Inserisci il nome utente e la password per accedere</p>

                                    <form method="POST" action="db_Accesso.php">
                                        <div class="form-group">
                                            <label for="nome_utente">Nome Utente</label>
                                            <input type="text" class="form-control" id="nome_utente">
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="password_utente">Password</label>
                                            <input type="password" class="form-control" id="password_utente">
                                        </div>

                                        <button type="submit" class="btn btn-secondary">Login</button>
                                
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="account-block rounded-right">
                                    <div class="overlay rounded-right"></div>
                                    <div class="account-testimonial">
                                        <h4 class="text-white mb-4">This beautiful theme yours!</h4>
                                        <p class="lead text-white">"Best investment i made for a long time. Can only
                                            recommend it for other users."</p>
                                        <p>- Admin User</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->

                <p class="text-muted text-center mt-3 mb-0">Non sei già Registrato ?<a href="register.html"
                        class="text-primary ml-1">Registrati</a></p>

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