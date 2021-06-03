<?php
    include_once 'dbcontroller.php';

    $conn = connect_database();
    // $post_id = $_POST['post_id'];
    ini_set('date.timezone','Asia/Jakarta');
    $article_date = date("Y-m-d H:i:s");;
    $article_title = $_POST['article_title']; 
    $article_admin = $_POST['article_admin'];
    $article_text = $_POST['article_text'];
    $article_category = $_POST['selectCategory'];

    $imageName = $_FILES['article_image']['name'];
    $imageSize = $_FILES['article_image']['size'];
    $tmp_name = $_FILES['article_image']['tmp_name'];
    $error = $_FILES['article_image']['error'];

    if($error == 0){
        if($imageSize > 2097152){
            $message = "File too large, must be under 2MB";
            echo "<script>
            alert('$message');
            window.location.href='panel.php';
            </script>";
            exit;
        } else {
            $img_extension = pathinfo($imageName, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_extension);

            $allowed_extension = array("jpg", "jpeg", "png");
            
            if(in_array($img_ex_lc, $allowed_extension)){
                $filename = uniqid("img-", true).'.'.$img_ex_lc;
                $target = 'img/'.$filename;
                move_uploaded_file($tmp_name, $target);
            } else {
                $message = "You are not allowed to upload this file type!";
                echo "<script>
                alert('$message');
                window.location.href='panel.php';
                </script>";
                exit;
            }
        }
    } else {
        $message = "Unknown Error!";
        echo "<script>
        alert('$message');
        window.location.href='panel.php';
        </script>";
        exit;
    }

    // $filename = ($_FILES['article_image']['name']);
    // $target = 'img/'.$filename;
    // if (move_uploaded_file($_FILES['article_image']['tmp_name'], $target)){
    //     echo "success";
    // } else {
    //     echo "failed";
    // }
    // $image = $_FILES['article_image']['name'];

    $sql = "INSERT INTO article (article_text, article_date, article_admin, article_title, article_category, article_image) values ('$article_text', '$article_date', '$article_admin', '$article_title','$article_category', '$target') ";
    $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    header("location: panel.php");
    



?>