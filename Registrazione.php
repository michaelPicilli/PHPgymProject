<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <title>Registrati</title>
    <?php
    include 'navbar.html';
    ?>
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
                                        <h3 class="h4 font-weight-bold text-theme">Registrazione</h3>
                                    </div>

                                    <h6 class="h5 mb-0">Benvenuto</h6>
                                    <p class="text-muted mt-2 mb-5">Compila questa form per unirti a noi </p>

                                    <form method="post" action="db_Registrazione.php">

                                        <div>
                                            <label for="nome_utente">Nome Utente</label>
                                            <input type="text" class="form-control" id="nome_utente" name="nome_utente" required>
                                        </div>
                                        <div>
                                            <label for="cognome_utente">Cognome Utente</label>
                                            <input type="text" class="form-control" id="cognome_utente" name="cognome_utente" required>
                                        </div>
                                        <div>
                                            <label for="sesso_utente">Sesso</label>
                                            <select class="form-control" name="sesso_utente" id="sesso_utente" required>
                                                <option value="M">Maschio</option>
                                                <option value="F">Femmina</option>
                                                <option value="A">Altro</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="email_utente">Email Utente</label>
                                            <input type="email" class="form-control" id="email_utente" name="email_utente" required>
                                        </div>
                                        <div>
                                            <label for="password_utente">Password</label>
                                            <input type="password" class="form-control" id="id_password_utente"
                                                name="password_utente" required>
                                        </div>
                                        <div>
                                            <label for="peso_utente">Peso Corporeo</label>
                                            <input type="number" class="form-control" name="peso_utente"
                                                id="peso_utente" placeholder="Kg" min="40" max="200" required>
                                        </div>
                                        <div >
                                            <label for="altezza_utente">Altezza</label>
                                            <input type="number" class="form-control" name="altezza_utente"
                                                id="altezza_utente" placeholder="cm" min="140" max="300" required>
                                        </div>
                                        <div class="mb-5">
                                            <label for="numero_allenamenti">Numero Allenamenti</label>
                                            <input type="number" class="form-control" name="numero_allenamenti"
                                                id="numero_allenamenti" min="1" max="7" required>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-secondary">Registrati</button>
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