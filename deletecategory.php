<?php
    include_once 'controller.php';

    $deletecategoryId = $_POST['selectCategory'];
    deletecategory($deletecategoryId);
    header("location: panel.php");
?>