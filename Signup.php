<?php
include('./config/config.php');
if(isset($_POST['submit'])){
    $NAME = $_POST['name'];
    $EMAIL = $_POST['email'];
    $PASSWORD = $_POST['password'];
    $CPASSWORD = $_POST['Cpassword'];
    if($PASSWORD === $CPASSWORD){
        $sql = "SELECT * FROM users WHERE email = '$EMAIL'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) == 1){
            echo "<script>window.alert('This email is already used')</script>";
        }else{
            $HASHED_PASSWORD = password_hash($PASSWORD, PASSWORD_DEFAULT);
            $data = "INSERT INTO users (name, email, password) VALUE ('$NAME', '$EMAIL', '$HASHED_PASSWORD')";
            mysqli_query($con, $data);
            header('location: Login.php');
        }
    }else{
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="icon"  href="prIMG/favicon.png">
    <style>
        <?php include('./css/signup.css')?>
    </style>
    <title>Maroc.Net-S'inscrire</title>
</head>
<body>
    <form action="" method="post" id="signupForm">
        <div class="title">
            <h1>S'inscrire</h1>
        </div>  
        <div>
            <fieldset>
                <legend>Nom et Prenom <span class="text_red" style="font-size: 13px;"></span></legend>
                <input type="text" name="name" id="name" maxlength="20" required>
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend>Email <span class="text_red" style="font-size: 13px;"></span></legend>
                <input type="email" name="email" id="email" maxlength="35" required>
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend>Mot de passe <span class="text_red" style="font-size: 13px;"></span></legend>
                <input type="password" name="password" id="password" minlength="8" maxlength="14" placeholder="(8-14) lettre" required>
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend>Confirmez <span class="text_red" style="font-size: 13px;"></span></legend>
                <input type="password" name="Cpassword" id="Cpassword" required>
            </fieldset>
        </div>
        <div class="submit">
            <button type="submit" id="submit" name="submit">S'inscrire</button>
        </div>
        <div class="submit-cont">
            <p>Already Have An Account? <a href="Login.php">Se connecter</a></p>
        </div>
    </form>
    <script>
        let checkIt = false;
        //start check email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const isValidEmail = email => emailRegex.test(email);
        let EmailInput = document.getElementById('email');
        EmailInput.addEventListener('focusout', ()=>{
            if(!isValidEmail(EmailInput.value)){
                checkIt = true;
                let field = EmailInput.parentElement;
                let legend = field.children[0];
                let span = legend.children[0];
                span.textContent = "(Email non valide)";
                EmailInput.parentElement.classList.add('error');
            }
        })
        //end check email
        //start check password
        let passwordRegex = /^.{8,14}$/;;
        let passwordInput = document.getElementById('password');
        passwordInput.addEventListener('focusout', ()=>{
            if(!passwordRegex.test(passwordInput.value)){
                checkIt = true;
                let field = passwordInput.parentElement;
                let legend = field.children[0];
                let span = legend.children[0];
                span.textContent = "(Mot de passe non valide)";
                passwordInput.parentElement.classList.add('error');
            }
        })
        let confirmPassword = document.getElementById('Cpassword');
        confirmPassword.addEventListener("focusout", ()=>{
            if(confirmPassword.value !== passwordInput.value){
                checkIt = true;
                let field = confirmPassword.parentElement;
                let legend = field.children[0];
                let span = legend.children[0];
                span.textContent = "(Non compatible)";
                confirmPassword.parentElement.classList.add('error');
            }
        })
        //end check password
        //start check if inputs empty
        let inputs = document.querySelectorAll('input');
        inputs.forEach(ele => {
            ele.addEventListener('focusout', ()=>{
                if(ele.value === ""){
                    checkIt = true;
                    let field = ele.parentElement;
                    let legend = field.children[0];
                    let span = legend.children[0];
                    span.textContent = "(Le champ est vide)";
                    ele.parentElement.classList.add('error');
                }
            })
            ele.addEventListener('focus', ()=>{
                let field = ele.parentElement;
                let legend = field.children[0];
                let span = legend.children[0];
                span.textContent = "";
                ele.classList.remove('text_red');
                ele.parentElement.classList.remove('error');
                checkIt = false;
                signUpForm.children[0].removeChild(h4);
            })
        });
        //end check if inputs empty
        // start check on submit
        let signUpForm = document.getElementById('signupForm');
        let h4 = document.createElement('h4');
        signUpForm.addEventListener('submit', (e)=>{
            if(checkIt === true){
                e.preventDefault();
                h4.textContent = "Formulaire incomplet";
                h4.classList.add('text_red');
                signUpForm.children[0].appendChild(h4);
            }
        })
        // end check on submit
        <?php include('./javascript/main.js')?>
    </script>
</body>
</html>