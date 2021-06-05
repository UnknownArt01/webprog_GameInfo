<?php

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

    function editarticle($title, $admin, $imagepath, $text, $id){
        include_once 'dbcontroller.php';
        $conn = connect_database();
        $sql = "UPDATE article SET article_title = '$title', article_admin = '$admin', article_image = '$imagepath', article_text = '$text' WHERE article_id = '$id'";
        $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    }

    function deletearticle($id){
        include_once 'dbcontroller.php';
        $conn = connect_database();
        $sql = "DELETE FROM article WHERE article_id = '$id'";
        $conn -> query($sql);
    }

    function addarticle($article_text, $article_date, $article_admin, $article_title, $article_category, $target){
        include_once 'dbcontroller.php';
        $conn = connect_database();
        $sql = "INSERT INTO article (article_text, article_date, article_admin, article_title, article_category, article_image) values ('$article_text', '$article_date', '$article_admin', '$article_title','$article_category', '$target') ";
        $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    }


    
?>