<?php
    include_once 'controller.php';
    $id = $_GET["id"];
    deletecomment($id);
    header("location: comment-panel.php");
?>