<?php
    include_once 'controller.php';

    $delete = $_GET['id'];
    deletearticle($delete);
    header('location:panel.php');
?>