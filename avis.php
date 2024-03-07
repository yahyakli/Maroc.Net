<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon"  href="prIMG/favicon.png">
        <title>Maroc.Net-Avis</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.min.css">
        <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/fontawesome.min.css">
        <link rel="stylesheet" href="css/avis.css">
    </head>
<body>
<?php include('./components/header.php')?>
<div id="menu_cont" class="menu_cont">
    <ul class="menu_links">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="contact.php">Contactez-nous</a></li>
        <li><a href="A propos.php">À propos de nous</a></li>
    </ul>
</div>
<div class="page">
    <style>
        .page{
            margin-top: 190px;
        }
        @media (max-width:750px){
            .page{
                margin-top: 130px;
            }
        }
    </style>
    <div class="container d-flex justify-content-left">
        <a style="font-size: 20px;border:1px solid black;text-decoration:none;" class="p-2 bg-light border-0" href="./contact.php"><i class="fa-solid fa-circle-left mr-1"></i>Retour</a>
    </div>
    <h1 style="text-align: center; margin-bottom:30px; color:#eeeeee; border:1px solid black; margin-top:20px;">Découvrez les avis de nos clients</h1>
    <?php
        include('./config/config.php');
        $avis = mysqli_query($con, "SELECT * FROM avis ORDER BY -created_at");
        while($row = mysqli_fetch_array($avis)){
            $post_creation_time_str = $row["created_at"];

            // Convert the string to a DateTime object
            $post_creation_time = new DateTime($post_creation_time_str);

            $current_time = new DateTime();

            // Calculate the time difference
            $time_difference = $current_time->diff($post_creation_time);

            $formatted_time_difference = '';

            if ($time_difference->s > 0) {
                $formatted_time_difference = $time_difference->s . ' seconds';
            }
        
            if ($time_difference->i > 0) {
                $formatted_time_difference = $time_difference->i . ' minutes ';
            }
        
            if ($time_difference->h > 0) {
                $formatted_time_difference = $time_difference->h . ' hours ';
            }
        
            if ($time_difference->d > 0) {
            $formatted_time_difference = $time_difference->d . ' days ';
            }
            echo htmlspecialchars_decode("
                <div class='container bg-light mb-5 p-3 cartA'>
                    <div style='display: flex; width:100%; justify-content: space-between;'>
                        <h2>$row[nom]</h2>
                        <h3>$formatted_time_difference ago</h3>
                    </div>
                    <h4>Email: $row[email]</h4>
                    <h4>Sujet : $row[sujet]</h4>
                    <h3>$row[body]</h3>
                </div>
            ");
        }
    ?>
    <?php include("./components/footer.php")?>
</div>
</body>
</html>