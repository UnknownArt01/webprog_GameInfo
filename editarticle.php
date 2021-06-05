<?php 
    include 'controller.php';
    $articleID = $_POST["article_id"];
    $newtitle = $_POST["article_title"];
    $newadmin = $_POST["article_admin"];
    $newtext = $_POST["article_text"];

    $imageName = $_FILES['article_image']['name'];
    $imageSize = $_FILES['article_image']['size'];
    $tmp_name = $_FILES['article_image']['tmp_name'];
    $error = $_FILES['article_image']['error'];

    if($error == 0){
        if($imageSize > 2097152){
            $message = "File too large, must be under 2MB";
            echo "<script>
            alert('$message');
            window.location.href='panel.php';
            </script>";
            exit;
        } else {
            $img_extension = pathinfo($imageName, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_extension);

            $allowed_extension = array("jpg", "jpeg", "png");
            
            if(in_array($img_ex_lc, $allowed_extension)){
                $filename = uniqid("img-", true).'.'.$img_ex_lc;
                $target = 'img/'.$filename;
                move_uploaded_file($tmp_name, $target);
                editarticle($newtitle, $newadmin, $target, $newtext, $articleID);
                header("location: panel.php");
            } else {
                $message = "You are not allowed to upload this file type!";
                echo "<script>
                alert('$message');
                window.location.href='panel.php';
                </script>";
                exit;
            }
        }
    } else {
        $message = "Unknown Error!";
        echo "<script>
        alert('$message');
        window.location.href='panel.php';
        </script>";
        exit;
    }
    
?>