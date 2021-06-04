<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"></head>

<body>

    <?php
    include_once 'dbcontroller.php';
    $conn = connect_database();
    $sql = "SELECT article_id, article_text, article_date, article_admin, article_title, article_category, article_image FROM article";
    $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     while ($row = $result ->fetch_assoc()){
            
    //         echo '<div class="isi-post">';
    //            echo '<h1>'.$row["article_title"].'</h1>'; 
    //             echo '<br>';
    //             echo '<hr class="solid">';
    //             echo '<br>';
    //         echo '<p class="news-date">'.$row["article_date"].'   |   '.$row["article_admin"].'   |   '.$row["article_category"].'</p> ';
    //         echo '<p class="news_post">'.$row["article_text"].'</p>';
    //         echo '</div>';
            
    //     }
    // }?>
    <table >
        <tr>
            <td>No</td>
            <td>Title</td>
            <td>Date</td>
            <td>Delete</td>
            <td>Edit</td>
        </tr>
    <?php if ($result->num_rows > 0) {
        $i = 1;
        while ($row = $result ->fetch_assoc()){?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row["article_title"] ?></td>
            <td><?php echo $row["article_date"] ?></td>
            <td><a href="">Delete</a></td>
            <td><a href="">Edit</a></td>
        </tr>
        <?php
        $i += 1;
        }
    }?>



    </table>


    <form action="addpost.php" method="POST" enctype="multipart/form-data">

        <!-- ID :<input type="number" name="post_id" > <br> -->
        <!-- Tanggal :<input type="date" name="article_date" > <br> -->
        Judul : <input type="text" name="article_title"><br>
        Admin : <input type="text" name="article_admin"><br>

        Gambar : <input type="file"  name="article_image"> <br>

        

        Isi Artikel : <textarea name="article_text" cols="30" rows="10"></textarea> <br>

        <input type="submit" value="Submit" name="submit">

        <?php

        $sql2 = "SELECT category_id,category_name FROM category";
        $result = $conn -> query($sql2);

        if ($result->num_rows > 0){?>
        <label for="selectCategory">Select Category</label>
        <select name="selectCategory">
            <?php
                    while ($row = $result->fetch_assoc()){
                ?>
            <option value="<?php echo $row["category_name"]; ?>"><?php echo $row["category_name"]; ?></option>
            <?php
                    }
                ?>
        <br><br>
        <?php
        } else {
            echo "0 results";
        }  
    ?>


    </form>


</body>

</html>