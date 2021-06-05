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
    <script src="http://code.jquery.com/jquery.js" type="text/javascript"></script>
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

    <?php
        include_once 'dbcontroller.php';

        $conn = connect_database();
        $sql = "SELECT * from category";
        $result = $conn -> query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result ->fetch_assoc()){?>
            <div class="category1-listnews">
                <div class="category1">
                    <h1><?php echo $row["category_name"]?></h1>
                </div>
                <div class="HidePost">
                    <?php
                        $catname = $row["category_name"];
                        $sql2 = "SELECT * from article WHERE article_category = '$catname'";
                        $result2 = $conn -> query($sql2);
                        if ($result2->num_rows > 0) {
                            while ($row2 = $result2 ->fetch_assoc()){?>
                            <div class="latest-post1">
                                <div class="postImage">
                                    <img src="<?php echo $row2["article_image"]?>">
                                </div>
                                <div class="ArticleHome">
                                    <h2><?php echo $row2["article_title"]?></h2>
                                    <p class="news-date">
                                        <?php echo $row2["article_date"]?> | <?php echo $row2["article_admin"]?> | <?php echo $row2["article_category"]?>
                                    </p>
                                    <a href="/UAS/webprog_GameInfo/news-page.php?id=<?php echo $row2["article_id"]?>">
                                        <input type="button" value="SELENGKAPNYA" class="button_post1">
                                    </a>
                                </div>
                            </div>
                            <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <?php
            }
        }   
    ?>

</body>
</html>