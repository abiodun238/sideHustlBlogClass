<?php

    //importing connection
    include "../config/connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>View All Post</h3>
    <hr />
    <table border="1">
        <thead>
            <th>ID</th>
            <th></th>
            <th>POST TITLE</th>
            <th>DATE CREATED</th>
            <th colspan="2">ACTION</th>
        </thead>
        <tbody>
            <?php
            $sno = 1;
            //getting all posts from database
            $query = mysqli_query($con,"SELECT * FROM posts ");
            //looping through the posts
             while($row = mysqli_fetch_array($query))
             {
            ?>
            <tr>
                <td><?=$sno++?></td>
                <td><img src="../uploads/<?=$row['post_img']?>" width="50px"/></td>
                <td><?=$row['post_title']?></td>
                <td><?=$row['created_at']?></td>
                <td><a href="view.php?id=<?=$row['id']?>">[view]</a></td>
                <td><a href="delete.php?id=<?=$row['id']?>">[delete]</a></td>
            </tr>
            <?php
             }
            ?>
        </tbody>
    </table>
</body>
</html>