<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <title>Comment Panel</title>
</head>

<body>
    <div class="latest-post1">
        <form method="POST" action="addcomment.php">
            <label for="name">Name : </label>
            <input type="text" name="name"><br><br>
            <label for="comment">Comment :</label><br>
            <textarea name="comment" class="comment-text" cols="30" rows="10"></textarea><br><br>
            <input type="submit" name="submit">
        </form>
    </div>

    <br>
    <br>
    
        <?php
            include_once 'dbcontroller.php';
            $conn = connect_database();
            $sql = "SELECT id, article_id, name, comment FROM comment";
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    echo '<div class="latest-post1">';
                    $artID = $row["article_id"];
                    $sql2 = "SELECT * FROM article WHERE article_id = '$artID'";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows > 0){
                        while ($row2 = $result2->fetch_assoc()){
                            echo 'article_id + name : ' . $row2["article_id"] . ' . ' . $row2["article_title"] . '<br>';
                        }
                    }
                    echo 'id : ' . $row["id"] . '<br>';
                    echo 'name : ' . $row["name"] . '<br>';
                    echo 'comment : ' . $row["comment"] . '<br>';?>
                    <a href="deletecomment.php?id=<?php echo $row["id"]?>"><input type="submit" value="Delete"></a>
                    <a href="editcompanel.php?id=<?php echo $row["id"]?>"><input type="submit" value="Edit"></a>
                    <?php
                    echo '</div>';
                }
            }else{
                echo "0 results";
            }

            $conn->close();
        ?>
</body>

</html>