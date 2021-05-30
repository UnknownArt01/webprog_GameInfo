<?php
    include_once 'controller.php';

    $conn = connect_database();
    // $post_id = $_POST['post_id'];
    $news_date = $_POST['news_date'];
    $news_title = $_POST['news_title']; 
    $news_admin = $_POST['news_admin'];
    $news_post = $_POST['news_post'];

    $sql = "INSERT INTO news (news_post, news_date, news_admin, news_title) values ('$news_post', '$news_date', '$news_admin', '$news_title') ";
    $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    header("location: news-post.php");




?>