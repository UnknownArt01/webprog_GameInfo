<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&family=Montserrat:wght@500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
    <title>Category - GameInfo</title>
</head>
<body>
    
    <!--Navigation Bar -->
    <div class="bodydiv">
        <!--Navigation Bar -->
        <header class="adminHeader">
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbutton">
                    <i class="logo"><img src="img/navigation-hover.png" alt=""></i>
                </label>
                <div class="header">
                    <h1 class="adminHeaderLogo">GameInfo</h1>
                    <div class="clear"></div>
                    <h4 class="adminHeaderLogo2">INFO MENARIK SEPUTAR GAME & TEKNOLOGI</h4>
                </div>

                <ul class="adminHeaderA">
                    <li><a class="a_header" href="index.php">Home</a></li>
                    <li><a class="a_header" href="category.php">Category</a></li>
                    <li><a class="a_header" href="list-news.php">News</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="category-h1">
        <h1>CATEGORY</h1>
    </div>
    

    <div class="category1-listnews">
    
        <div class="category1">
            <h1>First Person Shooter (FPS)</h1>
        </div>

        <div class="latest-post1">
            <!-- <div class="postImage">
                <img src="<?php echo $row["article_image"]?>">
            </div>
            <div class="ArticleHome">
                <h2><?php echo $row["article_title"]?></h2>
                <p class="news-date"><?php echo $row["article_date"]?> | <?php echo $row["article_admin"]?> |
                    <?php echo $row["article_category"]?></p>
                <a href="/UAS/webprog_GameInfo/news-page.php?id=<?php echo $row["article_id"]?>"><input
                        type="button" value="SELENGKAPNYA" class="button_post1"></a>
            </div> -->
        </div>
    </div>

    <div class="category2-listnews">
        <div class="category1">
            <h1>Multiplayer Online Battle Arena (MOBA)</h1>
        </div>

        <div class="latest-post1">
            <!-- <div class="postImage">
                <img src="<?php echo $row["article_image"]?>">
            </div>
            <div class="ArticleHome">
                <h2><?php echo $row["article_title"]?></h2>
                <p class="news-date"><?php echo $row["article_date"]?> | <?php echo $row["article_admin"]?> |
                    <?php echo $row["article_category"]?></p>
                <a href="/UAS/webprog_GameInfo/news-page.php?id=<?php echo $row["article_id"]?>"><input
                         type="button" value="SELENGKAPNYA" class="button_post1"></a>
            </div> -->
        </div>
    </div>

    <hr>

    <div class="category3-listnews">
    <div class="category1">
            <h1>Massively Multiplayer Online Role Playing Game (MMORPG)</h1>
        </div>

        <div class="latest-post1">
            <!-- <div class="postImage">
                <img src="<?php echo $row["article_image"]?>">
            </div>
            <div class="ArticleHome">
                <h2><?php echo $row["article_title"]?></h2>
                <p class="news-date"><?php echo $row["article_date"]?> | <?php echo $row["article_admin"]?> |
                    <?php echo $row["article_category"]?></p>
                <a href="/UAS/webprog_GameInfo/news-page.php?id=<?php echo $row["article_id"]?>"><input
                         type="button" value="SELENGKAPNYA" class="button_post1"></a>
            </div> -->
        </div>
    </div>


    


</body>
</html>