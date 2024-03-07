<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon"  href="prIMG/favicon.png">
        <title>Maroc.Net-A propos</title>
        <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.min.css">
        <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/fontawesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/A propos.css">
    </head>
<body>
    <?php include('./components/header.php')?>
    <div id="menu_cont" class="menu_cont">
        <ul class="menu_links">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contactez-nous</a></li>
            <li><a href="A propos.php" style="color: #eeeeee;">À propos de nous</a></li>
        </ul>
    </div>
    <button id="to_top" class="to_top"><a href="#"><i class="fa-solid fa-arrow-up-long"></i></a></button>
    <div class="cont_about">
        <div class="titleA">
            <h1>À propos de nous</h1>
        </div>
        <h1 style="margin: 30px 0 10px; text-align: center; border: 3px solid #eeeeee; padding: 10px ; border-left: none; border-right: none; font-size: 30px; color: #19283f;">Maroc.Net</h1>
        <div class="cont_img">
            <div>
                <h1 style="font-size: 30px; text-align: center; margin-top: 10px; color:#19283f ;">Un autre monde vous attend</h1>
                <h1 style="font-size: 30px; text-align: center; margin: 20px 0; color: #47555e;">عالم آخر في انتظارك</h1>
            </div>
            <div class="img">
                <img src="prIMG/logo.png" width="100%" alt="">
            </div>
        </div>
        <div class="cont_info">
            <h1>Qui sommes-nous ?</h1>
            <p style="width: 80%; margin:20px 12% 0; font-size: 20px; color: #eeeeee;"><span style="color:white ;font-weight: 600;">Maroc.Net</span> est une entreprise de télécommunications et d'internet de pointe qui s'est imposée comme 
            un phare de connectivité dans le paysage dynamique du Maroc. Avec un engagement à révolutionner les expériences numériques, 
            Maroc.Net se positionne à l'avant-garde de l'innovation, offrant une gamme diversifiée de services adaptés aux besoins évolutifs 
            des particuliers et des entreprises. Notre mission est de connecter de manière transparente les communautés, favorisant un écosystème 
            numérique où la vitesse, la fiabilité et des solutions personnalisées convergent. En tant que pionniers de la technologie de demain, 
            Maroc.Net imagine un avenir où chaque connexion est une porte ouverte à des possibilités infinies. Bienvenue dans un monde où Maroc.Net 
            transforme l'ordinaire en extraordinaire, connectant les individus et les entreprises de manière qui transcende les limites de l'imagination</p>
        </div>
        <div class="al_cont" style="width: 70%; margin-left: auto; margin-right: auto; margin-bottom: 30px;">
            <div style="display: flex; align-items: center; margin-bottom: 20px;">
                <i style="margin-right: 10px; font-size:20px ; color: #4267B2;" class="fa-solid fa-triangle-exclamation"></i>
                <h1 style="color: #FF0000;">Alerte</h1>
            </div>
            <h2  style="font-size: 18px; margin-left: 20px;">Cette entreprise est une entreprise fictive, et tout ce qui est mentionné sur ce site web est Irréel. 
                En réalité, ce site est mon projet Pour le premier contrôle du module sites web statiques, <strong style="color: #FF0000; text-decoration: underline; cursor: pointer;">yahya akli</strong></h2>
        </div>
    </div>
    <?php include("./components/footer.php")?>
    <script src="javascript/main.js"></script>
</body>
</html>