<?php
    include_once 'controller.php';

    $conn = connect_database();
    // $post_id = $_POST['post_id'];
    $article_date = $_POST['article_date'];
    $article_title = $_POST['article_title']; 
    $news_admin = $_POST['news_admin'];
    $news_post = $_POST['news_post'];

    $sql = "INSERT INTO news (news_post, article_date, news_admin, article_title) values ('$news_post', '$article_date', '$news_admin', '$article_title') ";
    $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    header("location: news-post.php");




?>