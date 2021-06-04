<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="listnews.css">
    <title>News List</title>
</head>

<body>
    <div class="bodydiv">
        <!--Navigation Bar -->
        <header class="adminHeader">
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbutton">
                    <i class="fas fa-bars"></i>
                </label>
                <img class="logo" src="img/logo_gameinfo-removebg-preview.png" alt="">

                <ul class="adminHeaderA">
                    <li><a class="a_header" href="index.php">Home</a></li>
                    <li><a class="a_header" href="category.php">Category</a></li>
                    <li><a class="a_header" href="news-page.php">News</a></li>
                    <li><a class="a_header" href="admin.php">Admin</a></li>
                </ul>
            </nav>
        <!--Halaman Utama -->
        <section class="container1">
            <div class="div1-left">
            </div>
        </section>
        <br><br>
        <div class="latest-post-list">
            <h1>News</h1>


            <?php
                include_once 'dbcontroller.php';
                // $articleID = $_GET['id'];
                $conn = connect_database();
                $sql = "SELECT * FROM article ORDER BY article_date DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result ->fetch_assoc()){?>
            <div class="latest-post1-list">
                <div class="postImage">
                    <img src="<?php echo $row["article_image"]?>" width="140" height="min-height">
                </div>
                <div class="ArticleHome">
                    <h2><?php echo $row["article_title"]?></h2>
                    <p class="news-date"><?php echo $row["article_date"]?> | <?php echo $row["article_admin"]?> |
                        <?php echo $row["article_category"]?></p>
                    <a href="/UAS/webprog_GameInfo/news-page.php?id=<?php echo $row["article_id"]?>"><input
                            type="button" value="SELENGKAPNYA" class="button_post1"></a>
                </div>
            </div>
            <?php
                    }
                }

            ?>
        </div>


    </div>
    <div class="clear"></div>

    <section>
        <footer>
            <div class="Footer">
                <h1 class="adminFooterLogo">GameInfo</h1>
                <div class="clear"></div>
                <h4 class="adminFooterLogo2">INFO MENARIK SEPUTAR GAME & TEKNOLOGI</h4>
            </div>
            <div class="clear"></div>
            <br>
            <hr>
            <h4>Copyright 2021 | GameInfo</h4>
        </footer>
    </section>
</body>

</html>