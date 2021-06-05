<?php
    include_once 'controller.php';

    $id = $_POST['article_id'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    
    addcomment($id, $name, $comment);
    header("location: news-page.php?id=$id");
?>