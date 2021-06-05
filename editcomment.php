<?php
    include_once 'controller.php';
    $id = $_POST["id"];
    $newname = $_POST["name"];
    $newcomment = $_POST["comment"];

    editcomment($id, $newname, $newcomment);

    header("location: comment-panel.php");
?>