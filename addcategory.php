<?php
    include_once 'controller.php';

    $category = $_POST['inputCategory'];
    addcategory($category);
    header("location: panel.php");
?>