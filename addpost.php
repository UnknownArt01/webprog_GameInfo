<?php
    include_once 'controller.php';

    $conn = connect_database();
    // $post_id = $_POST['post_id'];
    ini_set('date.timezone','Asia/Jakarta');
    $article_date = date("Y-m-d H:i:s");;
    $article_title = $_POST['article_title']; 
    $article_admin = $_POST['article_admin'];
    $article_text = $_POST['article_text'];
    $article_category = $_POST['selectCategory'];

    $sql = "INSERT INTO article (article_text, article_date, article_admin, article_title, article_category) values ('$article_text', '$article_date', '$article_admin', '$article_title','$article_category') ";
    $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    header("location: news-post.php");




?>