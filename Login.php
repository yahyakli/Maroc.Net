<?php
include('./config/config.php');
session_start();
if(isset($_POST['submit'])){
    $EMAIL = $_POST['email'];
    $PASSWORD = $_POST['password'];
    $data = "SELECT * FROM users WHERE email = '$EMAIL' AND password = '$PASSWORD'";
    $result = mysqli_query($con, $data);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["name"] = $row['name'];
        echo $_SESSION['name'];
        $_SESSION["email"] = $row["email"];
        $_SESSION["password"] = $row["password"];
        header('Location: index.php');
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
    <div style="position: fixed;top:70px;left:100px;">
        <a style="font-size: 20px;text-decoration:none; padding:10px 20px;background-color:white;color:black; border-radius:10px;" href="index.php"><i class="fa-solid fa-circle-left" style="margin-right: 10px;"></i>Retour</a>
    </div>
    <form action="" method="post" id="signupForm">
        <div class="title">
            <h1>Welcome Back!</h1>
        </div>  
        <div>
            <fieldset>
                <legend>Email</legend>
                <input type="email" name="email" id="email">
            </fieldset>
        </div>
        <div>
            <fieldset>
                <legend>Password</legend>
                <input type="password" name="password" id="password">
            </fieldset>
        </div>
        <div class="submit">
            <button type="submit" id="submit" name="submit">Login</button>
        </div>
        <div class="submit-cont">
            <p>You don't have an account? <a href="Signup.php">SignUp</a></p>
        </div>
    </form>
    <script>
        <?php include('./javascript/main.js')?>
    </script>
</body>
</html>