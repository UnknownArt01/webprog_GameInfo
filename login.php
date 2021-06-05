<?php
    include_once 'controller.php';

    if(isset($_POST['login'])){
        login();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="http://code.jquery.com/jquery.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="all.css">
    <title>Admin Login - GameInfo</title>

</head>

<body>
    <!-- Hiyaaaaaa -->
    <div class="container">
        <div class="round1"></div>
        <div>
            <header>
                <h1 class="header_h1_login">GameInfo</h1>
                <h3 class="header_h3_login">INFO MENARIK SEPUTAR GAME & TEKNOLOGI</h3>
            </header>
        </div>
        <div class="round2"></div>
        <div class="loginInput">
            <form action="" method="POST">
                <label for="username">Username / Email</label><br>
                <input class="input" type="text" name="username"><br>
                <label for="password">Password</label><br>
                <input class="input" type="password" name="password"><br><br>
                <input class="submit" type="submit" name="login" value="Login">
            </form>
        </div>
    </div>


</body>

</html>