<?php
session_start();
$userName = isset($_SESSION["name"]) ? $_SESSION["name"] : "";
?>
<header class="header">
    <style>
        .hide{
            display: none;
        }
    </style>
    <div class="top_section">
        <div class="userName">
            Welcome <?php echo $userName; ?>
        </div>
        <div class="signLog">
            <a href="Signup.php" style="background-color: #333;color:white;">Sign up</a>
            <a href="Login.php">Login</a>
        </div>
        <a href="" id="userIcon"><i class="fa fa-user"></i></a>
    </div>
    <div class="nav_bar">
        <a href="#"><img src="prIMG/logo.png" alt=""></a>
        <div class="options">
            <a href="index.php" id="accueil">Accueil</a>
            <a href="services.php" id="services">Services</a>
            <a href="contact.php" id="contact">Contactez-nous</a>
            <a href="A propos.php" id="propos">À propos de nous</a>
        </div>
        <form onsubmit="inputsearch(); return false;">
            <label for="input"></label>
            <input type="text" placeholder="search" maxlength="20" id="input" list="choice_list">
            <datalist id="choice_list">
                <option value="fibre"></option>
                <option value="forfaits"></option>
                <option value="wifi"></option>
                <option value="smartphone"></option>
                <option value="services"></option>
                <option value="contact"></option>
                <option value="a propos"></option>
            </datalist>
            <i class="fa-solid fa-magnifying-glass" id="search_button"></i>
            <div class="menu">
                <i id="menu_btn" class="fa-solid fa-bars"></i>
            </div>
        </form>
    </div>  
    <script>
        let locat = window.location.pathname.toLocaleLowerCase().replace("/maroc.net/", "");
        let accueil = document.getElementById("accueil");
        let services = document.getElementById("services");
        let contact = document.getElementById("contact");
        let propos = document.getElementById("propos");
        console.log(locat);
        if (locat === "index.php" || locat === "") {
            accueil.classList.add("active");
        } else if (locat === "services.php") {
            services.classList.add("active");
        } else if (locat === "contact.php") {
            contact.classList.add("active");
        } else if (locat === "A propos.php") {
            propos.classList.add("active");
        }

        let sessionName = '<?php echo $userName; ?>';
        let signLog = document.querySelector(".signLog");
        let accIcon = document.getElementById("userIcon");
        let welcome = document.querySelector(".userName");
        
        if (sessionName !== "") {
            signLog.classList.add("hide");
            accIcon.classList.remove("hide");
            welcome.classList.remove("hide");
        } else {
            signLog.classList.remove("hide");
            accIcon.classList.add("hide");
            welcome.classList.add("hide");
        }
    </script>
</header>
