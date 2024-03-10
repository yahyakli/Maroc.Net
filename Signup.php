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
        echo "<script>window.alert('The passwords are not matching')</script>";
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
    <title>Maroc.Net-SignUp</title>
</head>
<body>
    <div style="position: fixed;top:20px;left:20px;">
        <a style="font-size: 20px;text-decoration:none; padding:10px 20px;background-color:white;color:black; border-radius:10px;" href="index.php"><i class="fa-solid fa-circle-left" style="margin-right: 10px;"></i>Retour</a>
    </div>
    <form action="" method="post" id="signupForm">
        <div class="title">
            <h1>SignUp</h1>
        </div>  
        <div>
            <fieldset>
                <legend>Full name</legend>
                <input type="text" name="name" id="name" maxlength="20" required>
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend>Email</legend>
                <input type="email" name="email" id="email" maxlength="35" required>
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend>Password</legend>
                <input type="password" name="password" id="password" minlength="8" maxlength="14" placeholder="(8-14) lettre" required>
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend>Confirm password</legend>
                <input type="password" name="Cpassword" id="Cpassword" required>
            </fieldset>
        </div>
        <div class="submit">
            <button type="submit" id="submit" name="submit">Sign up</button>
        </div>
        <div class="submit-cont">
            <p>Already Have An Account? <a href="Login.php">Login</a></p>
        </div>
    </form>
    <script>
        <?php include('./javascript/main.js')?>
    </script>
</body>
</html>