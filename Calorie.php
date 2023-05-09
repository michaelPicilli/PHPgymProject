<?php
session_start();

if (isset($_SESSION['Logged_in']) && $_SESSION['Logged_in'] === true) {

 
    $numero_calorie = $_SESSION['peso'] * 24;
    $numero_calorie = ($numero_calorie * 1.5);

    $bulk = $numero_calorie + 500;
    $cut = $numero_calorie - 500;
} else {
    header("Location:Accesso.php");

}




?>
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
        <h2 class="mt-2">Guarda il tuo fabbisogno giornaliero</h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Peso</th>
                                <th>Altezza</th>
                                <th>Bulk</th>
                                <th>Cut</th>
                                <th>Carboidrati</th>
                                <th>Proteine</th>
                                <th>Grassi</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td><?php echo $_SESSION['peso'];?></td>
                                <td><?php echo $_SESSION['altezza'];?></td>
                                <td><?php echo $bulk;?></td>
                                <td><?php echo $cut;?></td>
                            </tr>
                        </tbody>
                    </table>

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