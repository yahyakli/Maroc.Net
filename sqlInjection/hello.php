<?php
session_start();
include('config.php');
if(isset($_POST["submit"])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $data = mysqli_query($con, "SELECT * FROM test WHERE email = '$email' and password = '$password'");
    if(mysqli_num_rows($data) !== 0){
        $row = mysqli_fetch_assoc($data);
        $email = $row['email'];
        $password = $row['password'];
    }else{
        $email = 'Not Found';
        $password = 'Not Found';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #aaa;
        }
    </style>
</head>
<body>
    <style>
        div{
            height: 300px;
            width: 300px;
            padding: 20px;
            background-color: white;
            display: flex;
            justify-content: center;
            flex-direction: column;
            gap: 30px;
        }
        h2{
            text-align: center;
        }
    </style>
    <div>
        <h2>welcome</h2>
        <h3>Your email : <?php echo $email?></h3>
        <h3>Your password : <?php echo $password?></h3>
    </div>  
</body>
</html>