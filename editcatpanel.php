<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }
?>
<?php
    include 'dbcontroller.php';
    $edit = $_GET["id"];

    $conn = connect_database();
    $sql = "SELECT * FROM category WHERE category_id = $edit";
    $result = $conn -> query($sql);    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>

<body>
    <form action="editcategory.php" method="POST">
        <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){?>
                <input type="text" name="catEditName" value="<?php echo $row["category_name"]?>">
                <input type="hidden" name="catID" value="<?php echo $row["category_id"]?>">
        <?php
            }
        }
        close_connection($conn);
        ?>        
    <input type="submit" name="editCat" value="Save">
    </form>
</body>

</html>