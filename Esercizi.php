<!-- TODO: Fare pagina "schede" -->
<!-- TODO: Mettere in tutte le pagine il logo della tab -->

<?php
session_start();

if (isset($_SESSION['Logged_in']) && $_SESSION['Logged_in'] === true) {

    $conn = mysqli_connect('localhost', 'c26giambanco', 'zk!QyT49', 'c26Training_Me');
    if (!$conn) {
        die("Connessione fallita: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM Esercizi ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {


    }



    mysqli_close($conn);


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <script src="Filtro.js"></script>
    <link rel="stylesheet" href="Style.css">
    <?php
    include 'navbar.html';
    ?>
    <title>ESERCIZI</title>
</head>


<body>
    <h1>ESERCIZI</h1>
    <label class="labelFiltro">Scegli la zona da allenare:</label>

    <form method="post" id="formFiltro" class="filtro">
        <select name="filtroEsercizio[]" id="filtroEsercizio" multiple multiselect-search="true">
            <option value="Petto">PETTO</option>
            <option value="Spalle">SPALLE</option>
            <option value="Braccia">BRACCIA</option>
            <option value="Schiena">SCHIENA</option>
            <option value="Addominali">ADDOMINALI</option>
            <option value="Gambe">GAMBE</option>
            <option value="Glutei">GLUTEI</option>
            <option value="Full body">FULL BODY</option>
            <option value="Olympic">OLYMPIC</option>
        </select>

        <input type="submit" value="INVIA" class="btn btn-secondary">
    </form>

    <div>
        <?php
         require("SezioneEsercizio.php");
        if (isset($_POST['filtroEsercizio'])) {
            $filtri = $_POST['filtroEsercizio'];
                   

        }
        while ($row = $result->fetch_assoc()) {
            
            $temp = new SezioneEsercizio($row['Nome'],$row['FocusArea'],$row['LinkVideo']); //TODO: Cambiare con query
            
            if (isset($filtri))
                $temp->mostraHTML($filtri);





            //echo $row['Nome'] . ":" . $row['LinkVideo'] . ":" . $row['FocusArea'] . "<br>";
            //echo "<br>";
        }
        
        if (isset($filtri))
            $temp->mostraHTML($filtri);
        ?>
    </div>
</body>

<footer>
    <?php
    include 'footer.html';
    ?>
</footer>

</html>