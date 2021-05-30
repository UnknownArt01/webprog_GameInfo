<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    include_once 'controller.php';
    $conn = connect_database();
    $sql = "SELECT article_id, news_post, article_date, news_admin, article_title FROM news";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result ->fetch_assoc()){
            
            echo '<div class="isi-post">';
               echo '<h1>'.$row["article_title"].'</h1>'; 
                echo '<br>';
                echo '<hr class="solid">';
                echo '<br>';
            echo '<p class="news-date">'.$row["article_date"].'   |   '.$row["news_admin"].'</p> ';
            echo '<p class="news_post">'.$row["news_post"].'</p>';
            echo '</div>';
            
        }
    }



?>
    
    <form action="addpost.php" method="post">

        <!-- ID :<input type="number" name="post_id" > <br> -->
        Tanggal :<input type="date" name="news_date" > <br>
        Judul : <input type="text" name="news_title"><br>
        Admin : <input type="text" name="news_admin"><br>

        Isi Artikel : <textarea name="news_post"  cols="30" rows="10"></textarea> <br>

        <input type="submit" value="Submit" name="submit">

    
    
    </form>


</body>
</html>


