<?php
    include_once 'dbcontroller.php';

    $conn = connect_database();
    $deletecategoryId = $_POST['selectCategory'];
    echo $_POST['selectCategory'];

    $sql = "DELETE FROM category where category_id = $deletecategoryId";
    connect_database() -> query($sql);
    header("location: panel.php");
?>