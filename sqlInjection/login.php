<?php
session_start();
session_destroy();
$_SESSION = array();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        form{
            height: 300px;
            width: 300px;
            padding: 20px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 30px;
        }
        input{
            padding: 5px 10px;
        }
        button{
            width: 60%;
            padding: 10px 0;
        }
    </style>
    <form action="hello.php" method="post">
        <h1>login</h1>
        <div>
            <input type="text" name="email" id="email" placeholder="email" required>
        </div>
        <div>
            <input type="password" name="password" id="password" placeholder="password" required>
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>