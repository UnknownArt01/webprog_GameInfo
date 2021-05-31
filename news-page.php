<?php

include_once ("controller.php");


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
    <link rel="stylesheet" href="news.css">
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
                    <a class="a_header" href="">Home</a>
                    <a class="a_header" href="">Category</a>
                    <a class="a_header" href="">News</a>
                    <a class="a_header" href="">HOT NEWS!</a>
                    <a class="a_header" href="">Admin</a>
                </div>
            </div>
            <div class="header">
                <form action="">
                    <input class="inputSearch" type="text" name="search" value="Search">
                    <input class="buttonSubmit" type="submit" name="search" value="search">
                </form>
            </div>
        </header>
        <!--Halaman Utama -->
        <section class="container1">
            <div class="div1-left">
            </div>
        </section>
       

            <?php
                include_once 'controller.php';
                $conn = connect_database();
                $sql = "SELECT post_id, article_post, article_date, article_admin, article_title FROM news";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result ->fetch_assoc()){
                        
                        echo '<div class="isi-post">';
                        echo '<h1>'.$row["article_title"].'</h1>'; 
                        echo '<br>';
                        echo '<hr class="solid">';
                        echo '<br>';
                        echo '<p class="news-date">'.$row["article_date"].'   |   '.$row["article_admin"].'</p> ';
                        echo '<p class="news_post">'.$row["article_post"].'</p>';
                        echo '</div>';
                    }
                }

            ?>
            


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

<?php 

    if(isset($_POST['update'])) {
        	
	$id = $_POST['post_id'];
	
	$newspost=$_POST['news_post'];
	$date=$_POST['news_date'];
	$title=$_POST['news_title'];

	
	$result = mysqli_query($mysqli, "UPDATE users SET name='$newspost',date='$date',title='$title' WHERE id=$id");
	
	
	// header("Location: index.php");
}


?>