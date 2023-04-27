<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <?php
    include 'navbar.html';
    ?>

    <style>
        h2 {
            text-align: center;
        }
    </style>

</head>

<body>
    <div class="border border-danger border-3 rounded-4">
        <h2 class="mt-2">Calcola il tuo Fabbisogno giornaliero</h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="">




                        <input type="submit" value="Calcola" class="btn btn-secondary">
                    </form>
                </div>
                <div class="col">

                </div>

            </div>
        </div>
    </div>

</body>

<footer>
    <?php
    include 'footer.html';
    ?>
</footer>

</html>