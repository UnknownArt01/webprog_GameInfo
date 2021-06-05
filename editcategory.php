<?php
    include 'controller.php';
    $edit = $_POST["catID"];
    $editnama = $_POST["catEditName"];
    $nama = $_POST["catName"];

    editcategory($edit, $editnama, $nama);
    header("location: panel.php");
?>