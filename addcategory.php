<?php
    include_once 'controller.php';

    $conn = connect_database();
    $category = $_POST['inputCategory'];
    
    $sql = "INSERT INTO category (category_name) values ('$category')";
    $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
    header("location: panel.php");
?>