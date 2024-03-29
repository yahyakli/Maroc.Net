<?php
    session_start();
    $userName = isset($_SESSION["name"]) ? $_SESSION["name"] : "";
    if(isset($_POST['logout'])){
        $_SESSION = array();
        session_destroy();
        header('location: Login.php');
        exit;
    }
    if (empty($_SESSION["name"])) {
        header('Location: Login.php');
    }
?>
<header class="header">
    <style>
        .hide{
            display: none;
        }
        .userOption{
            position: fixed;
            top: 40px;
            right: 0px;
            background-color: #333;
            height: 200px;
            width: 200px;
            border-radius: 0 0 0 10px;
            transition: 0.3s ease;
            ul{
                list-style: none;
                height: 100%;
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                box-sizing: border-box;
                a{
                    color: #eeeeee;
                    text-decoration: none;
                    width: 100%;
                    text-align: center;
                    font-size: 20px;
                    cursor: pointer;
                    border: 1px solid #eeeeee;
                    padding: 20px 0;
                    border-top: none;
                    border-left: none;
                    &:hover{
                        color: gray;
                    }
                }
                button{
                    color: #eeeeee;
                    background-color: transparent;
                    text-decoration: none;
                    width: 100%;
                    text-align: center;
                    font-size: 20px;
                    cursor: pointer;
                    border: none;
                    padding: 20px 0;
                    &:hover{
                        color: gray;
                    }
                }
            }
        }
    </style>
    <div class="top_section">
        <div class="userName">
            Bienvenue <a href="profile.php"><?php echo htmlspecialchars($userName); ?></a>
        </div>
        <img src="prIMG/profile.png" id="userIcon"></img>
    </div>
    <form action="" method="post">
        <div class="userOption hide">
            <ul>
                <a href="profile.php"><li><i class="fa-solid fa-user"></i> Profile</li></a>
                <a href=""><li><i class="fa-solid fa-cart-shopping"></i> Cart</li></a>
                <button type="submit" id="logout" name="logout"><li><i class="fa-solid fa-sign-out-alt"></i> Log out</li></button>
            </ul>
        </div>
    </form>
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
                <option value="avis"></option>
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
        } else if (locat === "a%20propos.php") {
            propos.classList.add("active");
        }

        let accIcon = document.getElementById("userIcon");
        let welcome = document.querySelector(".userName");
        
        accIcon.addEventListener("click", ()=>{
            let menu = document.querySelector(".userOption");
            menu.classList.toggle("hide");
        })
        document.addEventListener("click", (e)=>{
            let userIcon = document.getElementById('userIcon');
            let userOption = document.querySelector('.userOption');
            isItInIcon = e.target === userIcon;
            isItInmenu = e.target === userOption;
            if(!isItInIcon && !isItInmenu && userOption.classList.contains('hide') === false){
                userOption.classList.add('hide');
            }
        })
    </script>
</header>
