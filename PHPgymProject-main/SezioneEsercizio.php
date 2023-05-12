<?php
    class SezioneEsercizio {
        private $titolo;
        public $focusArea;
        public $linkVideo;

        function __construct($titolo, $linkVideo, $focusArea){
            $this->titolo = $titolo;
            $this->focusArea = $focusArea;
            $this->linkVideo = $linkVideo;
        }

        function mostraHTML($filtri){
            $conn = mysqli_connect('localhost','c26giambanco','zk!QyT49','c26Training_Me');
            if (!$conn) {
                die("Connessione fallita: " . mysqli_connect_error());
            }

            $queryFiltri = array();

            $i = 0;

            while(isset($filtri[$i])) //TODO: SE ESERCIZI NON PRESENTI STAMPARE "Esercizi non trovati."
            {
                $ruleCnt = "SELECT COUNT(*) FROM `Esercizi` WHERE `FocusArea` = '$filtri[$i]'";
                $queryCnt = mysqli_query($conn, $ruleCnt);
                $cntEsercizi = intval((mysqli_fetch_row($queryCnt)[0])); 
                
                $arrayEsercizi = array();

                for($j=0; $j<$cntEsercizi; $j++)    //TODO: cntEsercizi = STRING
                {
                    $ruleInfo = "SELECT * FROM `Esercizi` WHERE `FocusArea` = '$filtri[$i]'";    //TODO: HA SENSO VARIBAILI COSì??
                    $queryFiltri[$i] = mysqli_query($conn, $ruleInfo);
                    $result = mysqli_fetch_assoc($queryFiltri[$i]);  

                    $arrayEsercizi[$j] = new SezioneEsercizio($result["Nome"], $result["LinkVideo"], $filtri[$i]);
                }

                $nome = $arrayEsercizi[$i]->titolo;

                echo(
                    "<h2>$filtri[$i]</h2>
                    <div class='contenuto'>
                    <ul class='ulEsercizi'>
                        <li class'liEsercizi'>
                            <a href='Esercizio.php?titolo=$result[Nome]&link=$result[LinkVideo]' class='h3'> 
                            $nome
                            </a> 
                        </li>
                        
                        <details>
                            <summary>Anteprima video</summary>
                            <p class='dettagli'>
                               <img src='$result[LinkVideo]' alt='ciao' height=400 width=400>
                            </p>
                        </details>
                    </ul>"
                );
                
                $i++;
            }
        }
    }
?>