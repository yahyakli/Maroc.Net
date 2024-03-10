<?php
    include('./config/config.php');
    session_start();
    if(isset($_POST['submit'])){
        $NAME = $_SESSION['name'];
        if(!empty($NAME)){
            $EMAIL = $_SESSION['email'];
            $ID_USER = $_SESSION['id'];
            $SUBJECT = 'Non spécifié';
            if($_POST['subject'] !== ''){
                $SUBJECT = $_POST['subject'];
            }
            $BODY = $_POST['body'];
            $upload = "INSERT INTO avis (name, email, sujet, body, id_user) VALUE ('$NAME', '$EMAIL', '$SUBJECT', '$BODY', '$ID_USER')";
            mysqli_query($con, $upload);
            header('location: contact.php');
        }else{
            header('location:Login.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon"  href="prIMG/favicon.png">
        <title>Maroc.Net-Contacts</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.min.css">
        <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/fontawesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/contact.css">
    </head>
<body>
    <?php include('./components/header.php')?>
    <div id="menu_cont" class="menu_cont">
        <ul class="menu_links">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php" style="color: #eeeeee;">Contactez-nous</a></li>
            <li><a href="A propos.php">À propos de nous</a></li>
        </ul>
    </div>
    <button id="to_top" class="to_top"><a href="#"><i class="fa-solid fa-arrow-up-long"></i></a></button>
    <div class="container-xxl formul">
        <div class="container mb-4">
            <div class="row g-5">
                <div class="col-lg-6">
                    <p class="d-inline-block py-1 px-4 titlec" style="cursor: pointer;">Contact</p>
                    <h1 class="mb-4">Pour nous contacter</h1>
                    <div class="bg-light d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary ico"></i>
                        </div>
                        <div style="margin-left: 20px;">
                            <p class="text">Appelez-nous maintenant</p>
                            <h5 class="mb-0">+212 543976232</h5>
                        </div>
                    </div>
                    <div class="bg-light d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary ico"></i>
                        </div>
                        <div style="margin-left: 20px;">
                            <p class="text">Envoyez-nous une Mail</p>
                            <h5 class="mb-0">Maroc.Net@gmail.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="bg-light h-100 d-flex align-items-center p-5">
                        <form method="post" action="contact.php">
                            <h1 class="mb-2">Avez-vous des questions ? Veuillez nous contacter</h1>
                            <div class="row g-3">
                                <div class="col-12 mb-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet (optimal)">
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Ecriver ici" id="body" name="body" style="height: 150px" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="submit" id="submit">ENVOYER</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <div class=" bg-light text-center p-5 ">
                <h1><a href="avis.php" class="avis" style="text-decoration: none;">Afficher tous les avis</a></h1>
            </div>
        </div>
        <div class="container">
            <div class="h-100 bg-light d-flex align-items-center p-5 text">
                <div class="d-flex flex-shrink-0 align-items-center justify-content-center" style="width: 55px; height: 55px;">
                    <i class="fa fa-map-marker-alt text-primary"></i>
                </div>
                <div style="margin-left: 15px;">
                    <p class="mb-2">Adresse</p>
                    <h5 class="mb-0">Kadi Tazi, Mohammedia, Casablanca-Settat, Maroc</h5>
                </div>
            </div>
        </div>
        <div class="container">
            <div style="min-height: 400px; height: 500px; margin-top: 20px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7895.2891686043695!2d-7.395071763258955!3d33.69445097000412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1707049223909!5m2!1sfr!2sma" width="100%" height="80%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
        </div>
    </div>
    <?php include("./components/footer.php")?>
    <script src="javascript/bootstrap.bundle.min.js"></script>
    <script src="javascript/main.js"></script>
</body>
</html>