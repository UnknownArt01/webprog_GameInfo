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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="all.css">
    <title>Admin | Add News - GameInfo</title>
</head>

<body>
    <div class="panel-width">
        <div class="panel-addcategory">  
            <h1>Add New Category</h1>
        </div>

        <div class="panel-function-category">
            <form action="addcategory.php" method="POST">
                <label for="inputCategory">Category Name</label>
                <input type="text" name="inputCategory"><br><br>
                <input class="submitpanel-button" type="submit" name="addCategorySubmit" value="Add">
            </form>
        </div>
    </div>
    
    <br>

    <div class="panel-width">
        <div class="panel-addcategory">
            <h1>Delete Category</h1>
        </div>
        <div class="panel-function-category">
        <form action="deletecategory.php" method="POST">
            <?php
            include'dbcontroller.php';

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
            <input class="submitpanel-button" type="submit" name="deleteCategory" value="Delete">
        </form>
        <?php
            } else {
                echo "0 results";
            }   
        ?>
        </div>
    </div>
    <br>
    
    <div class="panel-width">
        <div class="panel-addcategory">
        <h1>Edit Category</h1>
        </div>

        <div class="panel-function-editcategory">
        
            <table >
                <tr>
                    <th>No</th>
                    <th class="editcategory-nama">Nama Category</th>
                    <th>Action</th>
                </tr>
                <?php

                    $sql = "SELECT category_id,category_name FROM category";
                    $result = $conn -> query($sql);

                    $i = 1;

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){?>
                            <tr>
                                <td>
                                    <?php echo $i?>
                                </td>
                                <td>
                                    <?php echo $row["category_name"]?>
                                </td>
                                <td class="panelmanagement">
                                    <a href="/UAS/webprog_GameInfo/editcatpanel.php?id=<?php echo $row["category_id"]?>">Edit</a>
                                </td>
                            </tr>
                        <?php
                        $i++;
                        }
                    } else {
                        echo "0 result";
                    } 

                    ?>
            </table>
        </div>    
    </div>
        <br>
        <div class="panel-width">
            <div class="panel-addcategory">
            <h1>Article Management</h1>
        </div>
        
        <div class="panel-function-editcategory">
                    <?php

            $sql = "SELECT article_id, article_text, article_date, article_admin, article_title, article_category, article_image FROM article";
            $result = $conn->query($sql);
            ?>
            <table>
                <tr>
                    <td>No</td>
                    <td class="articlemanagement-title">Title</td>
                    <td>Date</td>
                    <td>Delete</td>
                    <td>Edit</td>
                </tr>
            <?php if ($result->num_rows > 0) {
                $i = 1;
                while ($row = $result ->fetch_assoc()){?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row["article_title"] ?></td>
                    <td><?php echo $row["article_date"] ?></td>
                    <td class="panelmanagement"><a href="/UAS/webprog_GameInfo/deletepost.php?id=<?php echo $row["article_id"]?>">Delete</a></td>
                    <td class="panelmanagement"><a href="/UAS/webprog_GameInfo/editarticlepanel.php?id=<?php echo $row["article_id"]?>">Edit</a></td>
                </tr>
                <?php
                $i += 1;
                }
            }?>



    </table>
        </div>
            
        </div>

    <br>
    <br>
    <br>
    
    <div class="panel-width">
        <div class="panel-addcategory">
            <h1>Add Article</h1>
        </div>

        <div class="panel-function-addarticle">
            <form action="addpost.php" method="POST" enctype="multipart/form-data">

            <!-- ID :<input type="number" name="post_id" > <br> -->
            <!-- Tanggal :<input type="date" name="article_date" > <br> -->
            Judul : <input type="text" name="article_title"><br><br>
            Admin : <input type="text" name="article_admin"><br><br>

            Gambar : <input type="file"  name="article_image"> <br><br>

            Isi Artikel : <textarea name="article_text" cols="30" rows="10"></textarea> <br><br>

            <?php

            $sql2 = "SELECT category_id,category_name FROM category";
            $result = $conn -> query($sql2);

            if ($result->num_rows > 0){?>
            <label for="selectCategory">Select Category</label>
            <select name="selectCategory">
                <?php
                        while ($row = $result->fetch_assoc()){
                    ?>
                <option value="<?php echo $row["category_name"]; ?>"><?php echo $row["category_name"]; ?></option>
                <?php
                        }
                    ?>
            </select>
            <br><br>
            <?php
            } else {
                echo "0 results";
            }close_connection($conn);
            ?>
            <input class="submitpanel-button" type="submit" value="Submit" name="submit">
            </form>

        </div>

            
    </div>

    <div class="panel-width">
        <div class="panel-addcategory">  
            <h1>Comment Panel</h1>
            <a href="comment-panel.php"><input class="categorylist-button" type="submit" name="addCategorySubmit" value="Click Here"></a>
        </div>
    </div>
</body>

</html>