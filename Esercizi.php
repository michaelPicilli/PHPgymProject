<?php
    session_start();

    if (isset($_SESSION['Logged_in']) && $_SESSION['Logged_in'] === true) {

        $conn = mysqli_connect('localhost', 'c26giambanco', 'zk!QyT49', 'c26Training_Me');
        if (!$conn) {
            die("Connessione fallita: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM `Esercizi` ORDER BY FocusArea;";

        $result = mysqli_query($conn, $sql);

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
    <label for="formFiltro" style="margin-top: 20px; text-align: center; width: 100%;">Scegli la zona da allenare:</label>

    <div style="display:flex; justify-content:center; align-items:center;">
        <form method="post" id="formFiltro" style="margin-top: 20px;">
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
    </div>

    <div>
        <?php
            require("Esercizio.php");

            $esercizi = array();
            $cntFiltro=0;
            $cntEsercizi=0;

            if(isset($_POST['filtroEsercizio']))
                $filtri = $_POST['filtroEsercizio'];

            while($row = $result->fetch_assoc()) {
                $esercizi[$cntEsercizi] = new Esercizio($row['Nome'], $row['LinkVideo'], $row['FocusArea']);
                $cntEsercizi++;
            }

            if(isset($filtri))
            {
                count($filtri)-1 === 0 ? $counter=$cntFiltro<count($filtri): $counter = $cntFiltro<count($filtri)-1;

                for($cntFiltro=0; $cntFiltro<$counter; $cntFiltro++)
                {
                    for($cntEsercizi=0; $cntEsercizi<count($esercizi); $cntEsercizi++)
                    {
                        if(isset($esercizi[$cntEsercizi]))
                        {
                            $nome=$esercizi[$cntEsercizi]->nome;
                            $link=$esercizi[$cntEsercizi]->linkVideo;
                            $focusArea=$esercizi[$cntEsercizi]->focusArea;

                            if(in_array($focusArea, $filtri))
                            {
                                $indexFiltro = array_search($focusArea, $filtri);

                                echo(
                                    "<h2 style='margin-top: 20px; text-transform: uppercase; color: blue'>$filtri[$indexFiltro]</h2>
                                    <div class='contenuto'>
                                    <ul class='ulEsercizi'>
                                        <li class'liEsercizi'>
                                            <h3 style='color: black; text-transform: none'> 
                                                $nome
                                            </h3>
                                        </li>
                                
                                        <details style='margin-left: 10px; margin-top: -10px'>
                                            <summary>Anteprima video</summary>
                                            <p class='dettagli'>
                                                <img src='$link' alt='Video dimistrazione \"$nome\"' height=400 width=400>
                                            </p>
                                        </details>
                                    </ul>"
                                );
                            }
                        }
                    }
                }
            } 
            else
                echo("<div style='height: 295px;'> </div>")
        ?>
    </div>
</body>

<footer>
    <?php
        include 'footer.html';
    ?>
</footer>

</html>