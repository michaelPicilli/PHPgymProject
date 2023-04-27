<?php
    class SezioneEsercizio {
        private $titolo;
        private $dettagli;
        private $linkVideo;

        function __construct($titolo, $dettagli, $linkVideo){
            $this->titolo = $titolo;
            $this->dettagli = $dettagli;
            $this->linkVideo = $linkVideo;
        }

        function mostraHTML($filtri){
            $i = 0;

            while(isset($filtri[$i]))       //TODO: RIVEDERE + QUERY
            {
                echo(
                    "<h2>$filtri[$i]</h2>
                    <div class='contenuto'>
                    <ul>
                        <li>
                            <a href='Esercizio.php?titolo=!!!!&link=!!!!' class='h3'> 
                                //QUI NOME ESERCIZIO
                            </a> 
                        </li>
                        
                        <details>
                            <summary>Anteprima video</summary>
                            <p class='dettagli'>
                                <iframe width='560' height='315' src='' title='' frameborder='0'
                                    allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                            </p>
                        </details>
                    </ul>"
                );

                $i++;
            }
        }
    }
?>