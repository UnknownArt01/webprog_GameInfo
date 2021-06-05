<?php
    include_once 'dbcontroller.php';

    $conn = connect_database();
    $id = $_POST['article_id'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    
    $sql = "INSERT INTO comment(article_id, name, comment) values ('$id', '$name', '$comment')";
    $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    header("location: news-page.php?id=$id");
?>