<?php
    include_once 'dbcontroller.php';

    $delete = $_GET['id'];

    $conn = connect_database();
    $sql = "DELETE FROM article WHERE article_id = '$delete'";
    $conn -> query($sql);
    header('location:panel.php');
?>