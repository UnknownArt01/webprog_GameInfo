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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

    <title>GameInfo - Website Seputar Game & Teknologi</title>
</head>

<body>
    <div class="bodydiv">
        <!--Navigation Bar -->
        <header class="adminHeader">
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbutton">
                    <i class="logo"><img src="img\navigation-hover.png" alt=""></i>
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

    <div class="unknown">
        <div class="slider">
            <div class="sliders">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">

                <div class="slide first">
                    <img src="img\pict1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img\pict2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img\pict3.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="img\re8vil.png" alt="">
                </div>
                <div class="slide">
                    <img src="img\town.jpg" alt="">
                </div>
            </div>
            <!--MANUAL NAV START-->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn"></label>
            </div>
        </div>
    </div>
    <!-- </section> -->
    <section>
        <div class="clear"></div>
        <div class="latest-post">
            <h1>LATEST POST</h1>

            <?php
                include_once 'dbcontroller.php';
                // $articleID = $_GET['id'];
                $conn = connect_database();
                $sql = "SELECT * FROM article ORDER BY article_date DESC LIMIT 3";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result ->fetch_assoc()){?>
            <div class="latest-post1">
                <div class="postImage">
                    <img src="<?php echo $row["article_image"]?>">
                </div>
                <div class="postImageClear"></div>
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

        <div class="our-social-media">
            <h1>OUR SOCIAL MEDIA!</h1>

            <div class="socmed-facebook">
                <div class="img-fb"><img src="img/facebook.png"></div>
                <h2 class="socmed">GameInfo</h2>
            </div>
                <div class="socmed-clear"></div>
            <div class="socmed-youtube">
                <div class="img-yt"><img src="img/youtube.png"></div>
                <h2 class="socmed">GameInfo Official</h2>
            </div>
            <div class="socmed-clear"></div>
            <div class="socmed-instagram">
                <div class="img-ig"><img src="img/instagram.png"></div>
                <h2 class="socmed">officialgameinfo</h2>
            </div>


        </div>

    </section>

    <!-- <section>
        <footer>
            <h4>Copyright 2021 | GameInfo</h4>
        </footer>
    </section> -->

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