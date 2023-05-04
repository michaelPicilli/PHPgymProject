<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="Style.css">
        <title>HOME</title>
        <?php
            include 'navbar.html';
        ?>
        
        <style>
                * {box-sizing: border-box;}
                body {font-family: Verdana, sans-serif;}
                .mySlides {display: none;}
                img {vertical-align: middle;}

                /* Slideshow container */
                .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
                }

                /* Caption text */
                .text {
                color: #f2f2f2;
                font-size: 15px;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
                }

                /* Number text (1/3 etc) */
                .numbertext {
                color: #f2f2f2;
                font-size: 12px;
                padding: 8px 12px;
                position: absolute;
                top: 0;
                }

                /* The dots/bullets/indicators */

                .active {
                background-color: #717171;
                }

                /* Fading animation */
                .fade {
                animation-name: fade;
                animation-duration: 1.5s;
                }

                @keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
                }

                /* On smaller screens, decrease text size */
                @media only screen and (max-width: 300px) {
                .text {font-size: 11px}
                }
        </style>
    </head>

    <body class="homeBackground">
        <h1 class="appName">TRAINING ME</h1>
        
        <fieldset>
            <legend>ciao</legend>
        </fieldset>
        
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="maglietta.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="maglietta.png" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="maglietta.png" style="width:100%">
            </div>

            

        </div>

        
        <script>
            let slideIndex = 0;
            showSlides();
                function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                slides[slideIndex-1].style.display = "block";  
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
    </body>

    <footer>
        <?php
            include 'footer.html';
        ?>
    </footer>
</html>