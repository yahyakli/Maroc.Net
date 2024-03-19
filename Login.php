<?php
include('./config/config.php');
session_start();
if(isset($_POST['login'])){
    $EMAIL = $_POST['email'];
    $PASSWORD = $_POST['password'];
    $data = "SELECT * FROM users WHERE email = '$EMAIL'";
    $result = mysqli_query($con, $data);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $DATA_PASSWORD = $row['password'];
        if(password_verify($PASSWORD, $DATA_PASSWORD)){
            $_SESSION["name"] = $row['name'];
            $_SESSION["email"] = $row["email"];
            $_SESSION["password"] = $PASSWORD;
            $_SESSION["created_at"] = $row["created_at"];
            $_SESSION["age"] = $row["age"];
            $_SESSION["sexe"] = $row["sexe"];
            $_SESSION["country"] = $row["country"];
            $_SESSION["id"] = $row["id"];
            header('Location: index.php');
        }else{
            echo "<script>window.alert('Wrong email or password')</script>";
        }
    }else{
        echo "<script>window.alert('Wrong email or password')</script>";
    }
}
mysqli_close($con);
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
    <title>Maroc.Net-Login</title>
</head>
<body>
    <form action="" method="post" id="LoginForm">
        <div class="title">
            <h1>Welcome Back!</h1>
        </div>  
        <div>
            <fieldset>
                <legend>Email <span class="text_red" style="font-size: 13px;"></span></legend>
                <input type="email" name="email" id="email" required maxlength="35">
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend>Password <span class="text_red" style="font-size: 13px;"></span></legend>
                <input type="password" name="password" id="password" required maxlength="14">
            </fieldset>
        </div>
        <div class="submit">
            <button type="submit" id="login" name="login">Login</button>
        </div>
        <div class="submit-cont">
            <p>You don't have an account? <a href="Signup.php">SignUp</a></p>
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
                signUpForm.children[0].removeChild(h4);
            })
        });
        //end check if inputs empty
        // start check on submit
        let LoginForm = document.getElementById('LoginForm');
        let h4 = document.createElement('h4');
        LoginForm.addEventListener('submit', (e)=>{
            if(checkIt === true){
                e.preventDefault();
                h4.textContent = "Formulaire incomplet";
                h4.classList.add('text_red');
                LoginForm.children[0].appendChild(h4);
            }
        })
        // end check on submit
        <?php include('./javascript/main.js')?>
    </script>
</body>
</html>