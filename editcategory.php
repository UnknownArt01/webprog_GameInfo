<?php
    include 'dbcontroller.php';
    $edit = $_POST["catID"];
    $nama = $_POST["catEditName"];

    $conn = connect_database();
    $sql = "UPDATE category SET category_name = '$nama' WHERE category_id = '$edit'";
    if($conn -> query($sql) == TRUE){
        echo "Success";
    } else {
        echo "Failed" . $conn -> error;
    } 

    $conn->close();
    header("location: panel.php");
?>