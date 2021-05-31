<?php
    function connect_database(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "gameinfo";

        $connect = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die ("Error  Connecting to Database");

        return $connect;
    }

    function close_connection($x){
        mysqli_close($x);
    }

    function login(){
        $adminuser = "admin";
        $adminpass = "admin";

        session_start();

        $user = isset($_POST['username']) ? $_POST['username'] : "";
        $pass = isset($_POST['password']) ? $_POST['password'] : "";

        if($user == $adminuser && $pass == $adminpass){
            session_start();
            $_SESSION['username'] = $user;
            header("Location: panel.php");
        } else {
            $message = "Invalid Login Credentials!";
            echo "<script>
            alert('$message');
            window.location.href='login.php';
            </script>";
            exit;
            // header("Location: login.php");
        }
    }


    
?>