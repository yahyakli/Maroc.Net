<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon"  href="prIMG/favicon.png">
        <title>Maroc.net-Services</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/services.css">
        <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.min.css">
        <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/fontawesome.min.css">
    </head>
<body>
    <?php include('./components/header.php')?>
    <div id="menu_cont" class="menu_cont">
        <ul class="menu_links">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="services.php" style="color: #eeeeee;">Services</a></li>
            <li><a href="contact.php">Contactez-nous</a></li>
            <li><a href="A propos.php">À propos de nous</a></li>
        </ul>
    </div>
    <button id="to_top" class="to_top"><a href="#"><i class="fa-solid fa-arrow-up-long"></i></a></button>
    <div class="container-xxl py-3 bg-dark mb-5 top_cont">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3">Services</h1>
            <nav>
                <ol class=" back breadcrumb justify-content-center text-uppercase" style="background-color:#b8c0c0;">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item text-white active" style="cursor: pointer;">Service</li>
                    <li class="breadcrumb-item"><a href="contact.php">Contactez-nous</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h5 class="section-title text-center text-primary">Nos services</h5>
                <h1 class="mb-5">Découvrez nos services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 py-4">
                    <div class="service-item rounded pt-3 cart">
                        <div class="p-4">
                            <i class="fa fa-3x fa-solid fa-wifi text-primary mb-4"></i>
                            <h5>Wi-Fi</h5>
                            <p class="text">Avec le Wi-Fi de Maroc.Net, vous profiterez d'un excellent service et d'une expérience inoubliable</p>
                        </div>
                        <div class="cart_down">
                            <a href="index.php#wifi">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-4">
                    <div class="service-item rounded pt-3 cart">
                        <div class="p-4">
                            <i class="fa fa-3x fa-solid fa-globe text-primary mb-4"></i>
                            <h5>Fibre optique</h5>
                            <p class="text">Avec le Wi-Fi de l'entreprise, vous pouvez passer à un autre monde à une vitesse exceptionnelle</p>
                        </div>
                        <div class="cart_down">
                            <a href="index.php#fibre">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-4 ">
                    <div class="service-item rounded pt-3 cart">
                        <div class="p-4">
                            <i class="fa fa-3x fa-solid fa-mobile-button text-primary mb-4"></i>
                            <h5>Netphone</h5>
                            <p class="text">Découvrez nos derniers Netphone dotés de spécifications exceptionnelles et à un prix concurrentiel</p>
                        </div>
                        <div class="cart_down">
                            <a href="index.php#NetPhone">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-4 ">
                    <div class="service-item rounded pt-3 cart">
                        <div class="p-4">
                            <i class="fa fa-3x fa-brands fa-square-twitter text-primary mb-4"></i>
                            <h5>Forfait</h5>
                            <p class="text">Bénéficiez de nos toutes dernières offres exceptionnelles et découvrez un nouveau monde</p>
                        </div>
                        <div class="cart_down">
                            <a href="index.php#forfait">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-4 " id="reparation">
                    <div class="service-item rounded pt-3 cart">
                        <div class="p-4">
                            <i class="fa fa-3x fa-solid fa-screwdriver-wrench text-primary mb-4"></i>
                            <h5>Maintenance</h5>
                            <p class="text">Vous pouvez vous renseigner sur la maintenance en cas de panne</p>
                        </div>
                        <div class="cart_down">
                            <a href="">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-4">
                    <div class="service-item rounded pt-3 cart">
                        <div class="p-4">
                            <i class="fa fa-3x fa-solid fa-ranking-star text-primary mb-4"></i>
                            <h5>La qualité</h5>
                            <p class="text">Profitez de nos services inégalés en termes de qualité</p>
                        </div>
                        <div class="cart_down">
                            <a href="">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-4">
                    <div class="service-item rounded pt-3 cart">
                        <div class="p-4">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h5>24/7 Service</h5>
                            <p class="text">Profitez de notre excellent service client disponible 24/7</p>
                        </div>
                        <div class="cart_down">
                            <a href="">Découvrir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-4">
                    <div class="service-item rounded pt-3 cart">
                        <div class="p-4">
                            <i class="fa fa-3x fa-solid fa-info  text-primary mb-4"></i>
                            <h5>Autre</h5>
                            <p class="text">En traitant avec nous, vous pouvez bénéficier d'autres services</p>
                        </div>
                        <div class="cart_down">
                            <a href="">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("./components/footer.php")?>
    <script src="javascript/main.js"></script>
</body>
</html>