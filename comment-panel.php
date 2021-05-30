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

            include_once 'controller.php';

            $conn = connect_database();

            $sql = "SELECT id, name, comment FROM comment_section";
            $result = $conn->query($sql);

// m=ngecek kalau datanya itu lebih banyak dari 0
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

        ?>
    

</body>

</html>