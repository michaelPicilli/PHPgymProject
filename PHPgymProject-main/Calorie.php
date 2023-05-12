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
        li{
            margin : 5px
        }
    </style>

</head>

<body>
    <div class="border m-3 border-secondary border-3 rounded-4" style=" min-width: 508px;">
        <h2 class="mt-2 mb-3">Guarda il tuo fabbisogno giornaliero</h2>
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr class="m-2">
                                <th>Peso</th>
                                <th>Altezza</th>
                                <th>Bulk</th>
                                <th>Cut</th>
                                <th>Carboidrati</th>
                                <th>Proteine</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr class="m-2">
                                <td><?php echo $_SESSION['peso'];?></td>
                                <td><?php echo $_SESSION['altezza'];?></td>
                                <td><?php echo $bulk;?></td>
                                <td><?php echo $cut;?></td>
                                <td><?php echo $_SESSION['peso'] * 7?></td>
                                <td><?php echo $_SESSION['peso'] * 1.8?></td>

                            </tr>
                        </tbody>
                    </table>

                    <section>
                        <h4>Unità di misura</h4>
                        <ul>
                            <li>Peso : Kg</li>
                            <li>Altezza : Cm</li>
                            <li>Bulk : Calorie</li>
                            <li>Cut : Calorie</li>
                            <li>Carboidrati : Grammi</li>
                            <li>Proteine : Grammi</li>
                        </ul>
                    </section>

                </div>

                <div class="col">
                    <section>
                        <h3>Consigli</h3>
                        <ul>

                            <li>[Fase di Massa] - Per aumentare di peso, devi mangiare di più di quello che consumi</li><hr>
                            <li>[Fase di definizione] - Per perdere peso, devi mangiare meno di quello che consumi. Mantenendo lo stesso livello proteico</li><hr>
                            <li>[Integrazione] - Creatina,Proteine in Polvere,Aminoacidi</li>
                        </ul>
                    </section>
                        
                    
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