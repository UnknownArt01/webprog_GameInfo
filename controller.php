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
            $_SESSION['logintime'] = time();
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
        $conn->close();
    }

    function deletearticle($id){
        include_once 'dbcontroller.php';
        $conn = connect_database();
        $sql = "DELETE FROM article WHERE article_id = '$id'";
        $conn -> query($sql);
        $conn->close();
    }

    function addarticle($article_text, $article_date, $article_admin, $article_title, $article_category, $target){
        include_once 'dbcontroller.php';
        $conn = connect_database();
        $sql = "INSERT INTO article (article_text, article_date, article_admin, article_title, article_category, article_image) values ('$article_text', '$article_date', '$article_admin', '$article_title','$article_category', '$target') ";
        $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
        $conn->close();
    }

    function editcategory($edit, $editnama, $nama){
        include_once 'dbcontroller.php';
        $conn = connect_database();
        $sql = "UPDATE category SET category_name = '$editnama' WHERE category_id = '$edit'";
        if($conn -> query($sql) == TRUE){
            echo "Success";
            $sql2 = "UPDATE article set article_category = '$editnama' WHERE article_category = '$nama'";
            $conn -> query($sql2);
        } else {
            echo "Failed" . $conn -> error;
        }
        $conn->close();
    }

    function addcategory($name){
        include_once 'dbcontroller.php';
        $conn = connect_database();
        $sql = "INSERT INTO category (category_name) values ('$name')";
        $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    }

    function deletecategory($id){
        include_once 'dbcontroller.php';
        $conn = connect_database();
        $sql = "DELETE FROM category where category_id = $id";
        $conn -> query($sql);
    }

    function addcomment($id, $name, $comment){
        include_once 'dbcontroller.php';
        $conn = connect_database();
        $sql = "INSERT INTO comment(article_id, name, comment) values ('$id', '$name', '$comment')";
        $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    }

    function deletecomment($id){
        include_once 'dbcontroller.php';
        $conn = connect_database();
        $sql = "DELETE FROM comment WHERE id = '$id'";
        $conn -> query($sql);
    }

    function editcomment($id, $newname, $newcomment){
        include_once 'dbcontroller.php';
        $conn = connect_database();
        $sql = "UPDATE comment SET name = '$newname', comment = '$newcomment' WHERE id = '$id'";
        $conn -> query($sql);
    }
    
?>