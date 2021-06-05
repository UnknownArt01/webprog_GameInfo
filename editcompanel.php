<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Comment</title>
</head>

<body>
    <?php
        include_once 'dbcontroller.php';
        $id = $_GET["id"];
        $conn = connect_database();
        $sql = "SELECT * FROM comment WHERE id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){?>
            <div class="latest-post1">
                <form method="POST" action="editcomment.php">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <label for="name">Name : </label>
                    <input type="text" name="name" value="<?php echo $row["name"]?>"><br><br>
                    <label for="comment">Comment :</label><br>
                    <textarea name="comment" class="comment-text" cols="30" rows="10"><?php echo $row["comment"]?></textarea><br><br>
                    <input type="submit" name="submit">
                </form>
            <?php
            }
        }
    ?>
    </div>
</body>

</html>