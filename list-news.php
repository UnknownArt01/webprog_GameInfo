<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <title>Document</title>
</head>
<body>
<div class="bodydiv">
        <!--Navigation Bar -->
        <header class="adminHeader">
            <div class="header">
                <h1 class="adminHeaderLogo">GameInfo</h1>
                <div class="clear"></div>
                <h4 class="adminHeaderLogo2">INFO MENARIK SEPUTAR GAME & TEKNOLOGI</h4>
            </div>
            <div class="a_header">
                <div class="adminHeaderA">
                    <a class="a_header" href="index.php">Home</a>
                    <a class="a_header" href="category.php">Category</a>
                    <a class="a_header" href="news-page.php">News</a>
                    <a class="a_header-hot" href="">HOT NEWS!</a>
                    <a class="a_header" href="admin.php">Admin</a>
                </div>
            </div>
            <!-- <div class="header">
                <form action="">
                    <input class="inputSearch" type="text" name="search" value="Search">
                    <input class="buttonSubmit" type="submit" name="search" value="search">
                </form>
            </div> -->
        </header>
        <!--Halaman Utama -->
        <section class="container1">
            <div class="div1-left">
            </div>
        </section>
       

            <?php
                include_once 'controller.php';
                $conn = connect_database();
                $sql = "SELECT article_id, article_text, article_date, article_admin, article_title, article_category, article_image FROM article";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result ->fetch_assoc()){
                        
                        echo '<div class="isi-post">';
                        echo '<h1>'.$row["article_title"].'</h1>'; 
                        echo '<br>';
                        echo '<hr class="solid">';
                        echo '<br>';
                        echo '<p class="news-date">'.$row["article_date"].'   |   '.$row["article_admin"].'   |   '.$row["article_category"].'</p>';
                        echo '<p class="news_post">'.$row["article_text"].'</p>';
                        echo '';
                        echo '<p class="news_image">'.$row["article_image"].'</p>';
                        echo '</div>';
                        
                    }
                }

            ?>
            
            <img src=".row[" >


            <a href="edit.php">Edit</a>
            
            <input type="submit" value="Edit">


            <div class="clear"></div>

            <div class="latest-post">
                <h1>LATEST POST</h1>
                <br>
                <div class="latest-post1">
                    <div class="postImage"></div>
                    <div class="ArticleHome">
                        <h3>Selyandaru Akhirnya Tidak Jomblo</h2>
                        <p>lorem</p>
                    </div>
                </div>
                <div class="latest-post2">
                    <div class="postImage"></div>
                    <div class="ArticleHome">
                        <h3>Rafi Masuk Nominal Tertampan IMT?</h2>
                        <p>lorem</p>
                    </div>
                </div>
                <div class="latest-post3">
                    <div class="postImage"></div>
                    <div class="ArticleHome">
                        <h3>Seorang Programmer Terkena Tipes</h2>
                        
                    </div>
                </div>
            </div>

            </div>
</body>
</html>