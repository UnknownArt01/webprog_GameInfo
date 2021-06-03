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
    $article_categoryID = $_POST['catID'];

    $filename = ($_FILES['article_image']['name']);
    $target = 'img/'.$filename;
    if (move_uploaded_file($_FILES['article_image']['tmp_name'], $target)){
        echo "success";
    } else {
        echo "failed";
    }
    $image = $_FILES['article_image']['name'];

    $sql = "INSERT INTO article (article_text, article_date, article_admin, article_title, article_category, article_image, category_id) values ('$article_text', '$article_date', '$article_admin', '$article_title','$article_category', '$target', '$article_categoryID') ";
    $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    // header("location: news-post.php");
    



?>