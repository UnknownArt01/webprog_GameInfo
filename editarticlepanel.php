<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    } else if (isset($_SESSION['username'])){
        if (time() - $_SESSION["logintime"] > 600){
            session_unset();
            session_destroy();
            header("location: login.php");
        }
    }
?>
<?php
    include_once 'dbcontroller.php';

    $articleID = $_GET['id'];
    $conn = connect_database();
    $sql = "SELECT * FROM article WHERE article_id = $articleID";
    $result = $conn -> query($sql);    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Article</title>
</head>

<body>
    <h1>Edit Article</h1>
    <form action="editarticle.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="article_id" value="<?php echo $articleID?>">
    Gambar : <input type="file" name="article_image"> <br><br>
        <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){?>
        Judul : <input type="text" name="article_title" value="<?php echo $row["article_title"]?>"><br><br>
        Admin : <input type="text" name="article_admin" value="<?php echo $row["article_admin"]?>"><br><br>
        Isi Artikel : <textarea name="article_text" cols="30" rows="10"><?php echo $row["article_text"]?></textarea> <br><br>
        <?php
            }
        }
        ?>
        <input type="submit" name="submit" value="Simpan">
    </form>
</body>

</html>