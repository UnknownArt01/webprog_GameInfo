<?php

include_once ("dbcontroller.php");


?>

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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="listnews.css">
    <title>GameInfo Official Website</title>
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
                $conn = connect_database();
                $articleID = $_GET['id'];
                $sql = "SELECT * FROM article WHERE article_id = '$articleID'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result ->fetch_assoc()){
                        $part = explode('.', $row["article_text"]);
                        echo '<br>';
                        echo '<br>';
                        echo '<div class="isi-post">';
                        echo '<h1>'.$row["article_title"].'</h1>'; 
                        echo '<br>';
                        echo '<hr class="solid">';
                        echo '<br>';
                        echo '<p class="news-date">'.$row["article_date"].'   |   '.$row["article_admin"].'   |   '.$row["article_category"].'</p>';
                        echo '<br>';
                        echo '<br>';
                        echo '<img src="'.$row["article_image"].'" width="150">';
                        echo '<br>';
                        echo '<br>';
                        for ($i = 0; $i < count($part); $i++){  
                            print '<p class="news_post">'.$part[$i].'.</p>';
                            echo '<br>';
                        }
                        echo '<br>';
                        echo '<br>';
                        echo '';
                        echo '</div>';
                        
                    }
                }

            ?>           

            <div class="clear"></div>

            <div class="latest-post">
                <h1>LATEST POST</h1>
                <br>
                <?php

                    $sql = "SELECT * FROM article ORDER BY article_date DESC LIMIT 3";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result ->fetch_assoc()){?>
                        <div class="latest-post1">
                            <div class="postImage">
                                <img src="<?php echo $row["article_image"]?>">
                            </div>
                            <div class="ArticleHome">
                                <h2><?php echo $row["article_title"]?></h2>
                                <p class="news-date">
                                    <?php echo $row["article_date"]?> | <?php echo $row["article_admin"]?> | <?php echo $row["article_category"]?>
                                </p>
                                <a href="/UAS/webprog_GameInfo/news-page.php?id=<?php echo $row["article_id"]?>">
                                    <input type="button" value="SELENGKAPNYA" class="button_post1">
                                </a>
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
                <div class="socmed-youtube">
                    <div class="img-yt"><img src="img/youtube.png"></div>
                    <h2 class="socmed">GameInfo Official</h2>
                </div>
                <div class="socmed-instagram">
                    <div class="img-ig"><img src="img/instagram.png"></div>
                    <h2 class="socmed">officialgameinfo</h2>
                </div>
            </div>
        </section>
  
    </div>

                

    <div class="clear"></div>

    
    <div class="shareWhatsapp">
        
        <a href="https://www.facebook.com/"> <input type="button" value="Share to Facebook" class="share-fb"> </a> 
        <input type="button" value="Share to WhatsApp" class="share-wa">
        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false"><input type="button" value="">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        
    </div>

    <section>
        <div class="comment-areapanel">
            <h1>Comment</h1>
            <br>
            <form method="POST" action="addcomment.php">
                <label for="name" >Name : </label>
                <input type="text" name="name" class="comment-name"><br><br>
                <label for="comment">Comment :</label><br>
                <textarea name="comment" class="comment-text" cols="30" rows="10" ></textarea><br><br>
                <input type="hidden" name="article_id" value="<?php echo $articleID ?>">
                <input type="submit" name="submit" class="submit-comment">
            </form>
        </div>
        <br>
        <br>
        <?php
            $sql = "SELECT * FROM comment WHERE article_id = '$articleID'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){?>
                    <div class="latest-post1">
                    name : <?php echo $row["name"]?> <br>
                    comment : <?php echo $row["comment"]?><br>
                    </div>
                <?php
                }
            }
            $conn->close();
        ?>
    
    </section>


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


<!-- Comment
<?php
            $sql = "SELECT id, name, comment FROM comment_section";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    echo '<div class="latest-post1">';
                    echo 'id : ' . $row["id"] . '<br>';
                    echo 'name : ' . $row["name"] . '<br>';
                    echo 'comment : ' . $row["comment"] . '<br>';
                    echo '</div>';
                }
            }else{
                echo "0 results";
            }

            $conn->close();
        ?> -->