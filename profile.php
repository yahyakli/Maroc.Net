<?php
    session_start();
    if (empty($_SESSION["name"])) {
        header('Location: Login.php');
    }
    $id = $_SESSION['id'];
    include "./config/config.php";
    if(isset($_POST['cnom'])){
        if($_POST["nom"]!=""){
            $name = $_POST["nom"];
            mysqli_query($con, "UPDATE users SET name='$name' WHERE id='$id'");
            $_SESSION['name'] = $name;
            header('location: profile.php');
        }else{
            echo '<script>window.alert("le champ est vide")</script>';
        }
    }
    if(isset($_POST['cage'])){
        if($_POST["age"]!=""){
            $age = $_POST["age"];
            mysqli_query($con, "UPDATE users SET age='$age' WHERE id='$id'");
            $_SESSION['age'] = $age;
            header('location: profile.php');
        }else{
            echo '<script>window.alert("le champ est vide")</script>';
        }
    }
    if(isset($_POST['csexe'])){
        if($_POST["sexe"]!=""){
            $sexe = $_POST["sexe"];
            mysqli_query($con, "UPDATE users SET sexe='$sexe' WHERE id='$id'");
            $_SESSION['sexe'] = $sexe;
            header('location: profile.php');
        }else{
            echo '<script>window.alert("le champ est vide")</script>';
        }
    }
    if(isset($_POST['cays'])){
        if($_POST["pays"]!=""){
            $pays = $_POST["pays"];
            mysqli_query($con, "UPDATE users SET country='$pays' WHERE id='$id'");
            $_SESSION['country'] = $pays;
            header('location: profile.php');
        }else{
            echo '<script>window.alert("le champ est vide")</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  href="prIMG/favicon.png">
    <title>Maroc.Net-Profile</title>
    <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <a href="index.php" class="bg-dark text-light py-2 px-3" style="position: fixed;top:20px; left:10px;text-decoration:none;z-index:100;"><i class="fa-solid fa-circle-left mr-1"></i>Routeur</a>
    <div class="container">
        <div class="banner">
            <img src="./prIMG/banner.jpg" alt="banner">
        </div>
        <div class="info">
            <img src="./prIMG/profile.png" alt="">
            <div>
                <h4><?php echo $_SESSION['name']?></h4>
                <h4><?php echo $_SESSION['email']?></h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <table>
                    <tr class="tr1">
                        <td class="label">Nom:</td>
                        <td><?php echo $_SESSION['name']?></td>
                    </tr>
                    <tr class="tr2">
                        <td class="label">Age:</td>
                        <td><?php echo $_SESSION['age']!=0 ?$_SESSION['age']:'' ?></td>
                    </tr>
                    <tr class="tr1">
                        <td class="label">Sexe:</td>
                        <td><?php echo $_SESSION['sexe']!='null' ?$_SESSION['sexe']:'' ?></td>
                    </tr>
                    <tr class="tr2">
                        <td class="label">Pays:</td>
                        <td><?php echo $_SESSION['country']!='null' ?$_SESSION['country']:'' ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-6 col-sm-12 d-flex mt-sm-5 mt-lg-0">
                <table class="col-lg-3 col-sm-3 tmodifier">
                    <tr class="hidden-titles hide"><td>Nom:</td></tr>
                    <tr><td><button class="modifier" id="mnom">Modifier</button></td></tr>
                    <tr class="hidden-titles hide"><td>Age:</td></tr>
                    <tr><td><button class="modifier" id="mage">Modifier</button></td></tr>
                    <tr class="hidden-titles hide"><td>Sexe:</td></tr>
                    <tr><td><button class="modifier" id="msexe">Modifier</button></td></tr>
                    <tr class="hidden-titles hide"><td>Pays:</td></tr>
                    <tr><td><button class="modifier" id="pays">Modifier</button></td></tr>
                </table>
                <form action="" method="post" class="d-flex">
                    <table class="col-lg-3 col-sm-6 ml-1">
                        <tr class="hidden-titles hide"><td class="opa">.</td></tr>
                        <tr><td><button type="submit" name="cnom" class="confirm ignor" id="cnom">Confirmer</button></td></tr>
                        <tr class="hidden-titles hide"><td class="opa">.</td></tr>
                        <tr><td><button type="submit" name="cage" class="confirm ignor" id="cage">Confirmer</button></td></tr>
                        <tr class="hidden-titles hide"><td class="opa">.</td></tr>
                        <tr><td><button type="submit" name="csexe" class="confirm ignor" id="csexe">Confirmer</button></td></tr>
                        <tr class="hidden-titles hide"><td class="opa">.</td></tr>
                        <tr><td><button type="submit" name="cays" class="confirm ignor" id="cays">Confirmer</button></td></tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script>
        //start disable confirm btns
        let btns_confirm = document.querySelectorAll(".confirm");
        btns_confirm.forEach(ele => {
            ele.disabled = true
        });
        //end disable confirm btns
        ///////////////////////////////////////////////
        let mnom = document.getElementById("mnom");
        let nc = 0;
        mnom.addEventListener("click", ()=>{
            if(nc === 0){
                let input = document.createElement('input');
                input.setAttribute("type", "text");
                input.setAttribute("placeholder", "Entrez le nouveau nom");
                input.setAttribute("name", "nom");
                input.setAttribute("id", "nom");
                let cnom = document.getElementById("cnom");
                let fparent = cnom.parentElement;
                let first = fparent.parentElement.firstChild;
                fparent.parentElement.insertBefore(input, first);
                cnom.disabled = false;
                nc = 1;
                cnom.classList.remove("ignor");
            }else{
                let cnom = document.getElementById("cnom");
                let fparent = cnom.parentElement;
                let first = fparent.parentElement.firstChild;
                fparent.parentElement.removeChild(first);
                cnom.disabled = true;
                cnom.classList.add("ignor");
                nc = 0;
            }
        })
        ///////////////////////////////////////////////
        ///////////////////////////////////////////////
        let mage = document.getElementById("mage");
        let ac = 0;
        mage.addEventListener("click", ()=>{
            if(ac === 0){
                let input = document.createElement('input');
                input.setAttribute("type", "text");
                input.setAttribute("placeholder", "Entrez le nouveau age");
                input.setAttribute("name", "age");
                input.setAttribute("id", "age");
                let cage = document.getElementById("cage");
                let fparent = cage.parentElement;
                let first = fparent.parentElement.firstChild;
                fparent.parentElement.insertBefore(input, first);
                cage.disabled = false;
                ac = 1;
                cage.classList.remove("ignor");
            }else{
                let cage = document.getElementById("cage");
                let fparent = cage.parentElement;
                let first = fparent.parentElement.firstChild;
                fparent.parentElement.removeChild(first);
                cage.disabled = true;
                cage.classList.add("ignor");
                ac = 0;
            }
        })
        ///////////////////////////////////////////////
        ///////////////////////////////////////////////
        let msexe = document.getElementById("msexe");
        let sc = 0;
        msexe.addEventListener("click", ()=>{
            if(sc === 0){
                let input = document.createElement('input');
                input.setAttribute("type", "text");
                input.setAttribute("placeholder", "Entrez le nouveau sexe");
                input.setAttribute("name", "sexe");
                input.setAttribute("id", "sexe");
                let csexe = document.getElementById("csexe");
                let fparent = csexe.parentElement;
                let first = fparent.parentElement.firstChild;
                fparent.parentElement.insertBefore(input, first);
                csexe.disabled = false;
                sc = 1;
                csexe.classList.remove("ignor");
            }else{
                let csexe = document.getElementById("csexe");
                let fparent = csexe.parentElement;
                let first = fparent.parentElement.firstChild;
                fparent.parentElement.removeChild(first);
                csexe.disabled = true;
                csexe.classList.add("ignor");
                sc = 0;
            }
        })
        ///////////////////////////////////////////////
        ///////////////////////////////////////////////
        let pays = document.getElementById("pays");
        let pc = 0;
        pays.addEventListener("click", ()=>{
            if(pc === 0){
                let input = document.createElement('input');
                input.setAttribute("type", "text");
                input.setAttribute("placeholder", "Entrez le nouveau pays");
                input.setAttribute("name", "pays");
                input.setAttribute("id", "pays");
                let cays = document.getElementById("cays");
                let fparent = cays.parentElement;
                let first = fparent.parentElement.firstChild;
                fparent.parentElement.insertBefore(input, first);
                cays.disabled = false;
                pc = 1;
                cays.classList.remove("ignor");
            }else{
                let cays = document.getElementById("cays");
                let fparent = cays.parentElement;
                let first = fparent.parentElement.firstChild;
                fparent.parentElement.removeChild(first);
                cays.disabled = true;
                cays.classList.add("ignor");
                pc = 0;
            }
        })
        ///////////////////////////////////////////////
    </script>
</body>
</html>