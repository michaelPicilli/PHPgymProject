
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contattaci.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <?php
        include 'navbar.html';
    ?>
    <title>Contattaci</title>
</head>
<body>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
<div class="container" style="margin-top: 20px; margin-bottom: 20px">
    <div class="contact__wrapper shadow-lg mt-n9">
        <div class="row no-gutters">
            <div class="col-lg-5 contact-info__wrapper gradient-brand-color p-5 order-lg-2">
                <h3 class="color--white mb-5">Contatti</h3>
    
                <ul class="contact-info__list list-style--none position-relative z-index-101">
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-envelope"></i></span> TrainingMe@gmail.com
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-phone"></i></span> 329 123 4567
                    </li>
                    <li class="mb-4 pl-4">
                        <span class="position-absolute"><i class="fas fa-map-marker-alt"></i></span> TrainingMe s.r.l.
                        <br> Santa Maria di Sclaunicco
                        <br> Udine 33050
    
                        <div class="mt-3">
                            <a href="https://www.google.com/maps/place/33050+Santa+Maria+UD/@45.9699944,13.1515513,15z/data=!3m1!4b1!4m6!3m5!1s0x477bc994f9c8717f:0x45d36adf128df070!8m2!3d45.9707553!4d13.1586844!16s%2Fg%2F11b6gf509d" target="_blank" class="text-link link--right-icon text-white">Portami<i class="link__icon fa fa-directions"></i></a>
                        </div>
                    </li>
                </ul>

            </div>
    
            <div class="col-lg-7 contact-form__wrapper p-5 order-lg-1">
                <form action="#" class="contact-form form-validate" novalidate="novalidate">
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="firstName">Nome</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Mario">
                            </div>
                        </div>
    
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="lastName">Cognome</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Rossi">
                            </div>
                        </div>
    
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="mario.rossi@gmail.com">
                            </div>
                        </div>
    
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="phone">Numero di Telefono</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="+39 386 276 3562">
                            </div>
                        </div>
    
                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label class="required-field" for="message">Come possiamo aiutarti?</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Qual'è il problema..?"></textarea>
                            </div>
                        </div>
    
                        <div class="col-sm-12 mb-3">
                            <button type="submit" name="submit" class="btn btn-secondary">Invia</button>
                        </div>
    
                    </div>
                </form>
            </div>
            <!-- End Contact Form Wrapper -->
    
        </div>
    </div>
</div>
</body>
<footer>
    <?php include 'footer.html'; ?>
</footer>
</html>