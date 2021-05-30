<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Add News</title>
</head>

<body>
    <h1>Add New Category</h1>
    <form action="addcategory.php" method="POST">
        <label for="inputCategory">Category Name</label>
        <input type="text" name="inputCategory"><br><br>
        <input type="submit" name="addCategorySubmit" value="Add">
    </form>

    <br>

    <h1>Delete Category</h1>
    <form action="deletecategory.php" method="POST">
    <?php
        include 'controller.php';

        $conn = connect_database();

        $sql = "SELECT category_id,category_name FROM category";
        $result = $conn -> query($sql);

        if ($result->num_rows > 0){?>
            <label for="selectCategory">Select Category</label>
            <select name="selectCategory">
                <?php
                    while ($row = $result->fetch_assoc()){
                ?>
                <option value="<?php echo $row["category_id"]; ?>"><?php echo $row["category_name"]; ?></option>
                <?php
                    }
                ?>
            </select>
            <br><br>
            <input type="submit" name="deleteCategory" value="Delete">
        </form>
        <?php
        } else {
            echo "0 results";
        }
        close_connection($conn);    
    ?>
</body>

</html>