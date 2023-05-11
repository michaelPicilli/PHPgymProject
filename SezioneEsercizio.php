<?php
    class SezioneEsercizio {
        private $titolo;
        public $focusArea;
        public $linkVideo;

        function __construct($titolo, $focusArea, $linkVideo){
            $this->titolo = $titolo;
            $this->focusArea = $focusArea;
            $this->linkVideo = $linkVideo;

        }

        function mostraHTML($filtri){
            $i = 0;

            while(isset($filtri[$i]))       //TODO: RIVEDERE + QUERY
            {
                var_dump($this->linkVideo);
                echo(
                    "<h2>$filtri[$i]</h2>
                    <div class='contenuto'>
                    <ul class='ulEsercizi'>
                        <li class'liEsercizi'>
                            <a href='Esercizio.php?titolo=!!!!&link= class='h3'> 
                                //QUI NOME ESERCIZIO
                            </a> 
                        </li>
                        
                        <details>
                            <summary>Anteprima video</summary>
                            <p class='dettagli'>
                               <img src='$this->linkVideo' alt='ciao' height=400 width=400>
                            </p>
                        </details>
                    </ul>"
                );

                $i++;
            }
        }
    }
?>