<?php
    include_once 'controller.php';

    $conn = connect_database();
    // $post_id = $_POST['post_id'];
    $article_date = $_POST['article_date'];
    $article_title = $_POST['article_title']; 
    $article_admin = $_POST['article_admin'];
    $article_post = $_POST['article_post'];

    $sql = "INSERT INTO news (article_post, article_date, news_admin, article_title) values ('$article_post', '$article_date', '$article_admin', '$article_title') ";
    $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    header("location: news-post.php");




?>