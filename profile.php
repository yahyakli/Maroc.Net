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
    <a href="index.php" class="bg-dark text-light py-2 px-3" style="position: fixed;top:20px; left:10px;text-decoration:none;"><i class="fa-solid fa-circle-left mr-1"></i>Routeur</a>
    <div class="container">
        <div class="banner">
            <img src="./prIMG/banner.jpg" alt="banner">
        </div>
        <div class="info">
            <img src="./prIMG/profile.png" alt="">
            <div>
                <h2><?php echo $_SESSION['name']?></h2>
                <h3><?php echo $_SESSION['email']?></h2>
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
            <div class="col-lg-6 col-sm-12 d-flex">
                <table class="col-lg-3 col-sm-6">
                    <tr><td><button class="modifier" id="mnom">Modifier</button></td></tr>
                    <tr><td><button class="modifier" id="mage">Modifier</button></td></tr>
                    <tr><td><button class="modifier" id="msexe">Modifier</button></td></tr>
                    <tr><td><button class="modifier" id="pays">Modifier</button></td></tr>
                </table>
                <form action="" method="post" class="d-flex">
                    <table class="col-lg-3 col-sm-6 ml-1">
                        <tr><td><button type="submit" name="cnom" class="confirm ignor" id="cnom">Confirmer</button></td></tr>
                        <tr><td><button type="submit" name="cage" class="confirm ignor" id="cage">Confirmer</button></td></tr>
                        <tr><td><button type="submit" name="csexe" class="confirm ignor" id="csexe">Confirmer</button></td></tr>
                        <tr><td><button type="submit" name="cays" class="confirm ignor" id="cays">Confirmer</button></td></tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script>
        //start disable confirm btns
        //end disable confirm btns
        let mnom = document.getElementById("mnom");
        let nc = 0;
        mnom.addEventListener("click", ()=>{
            if(nc === 0){
                console.log("do it");
                let input = document.createElement('input');
                input.setAttribute("type", "text");
                input.setAttribute("placeholder", "Entrez le nouveau nom");
                input.setAttribute("name", "nom");
                input.setAttribute("id", "nom");
                input.style = "width:250px; margin-right:5px;margin-top:10px;font-size:20px;height:40px;box-sizing:border-box; padding-left:10px;"
                let cnom = document.getElementById("cnom");
                let fparent = cnom.parentElement;
                let first = fparent.parentElement.firstChild;
                fparent.parentElement.insertBefore(input, first);
                nc = 1;
                let conf = document.getElementById("cnom");
                conf.disabled = false;
                conf.classList.remove("ignor");
            }else{
                let cnom = document.getElementById("cnom");
                let fparent = cnom.parentElement;
                let first = fparent.parentElement.firstChild;
                fparent.parentElement.removeChild(first);
                nc = 0;
            }
        })
    </script>
</body>
</html>