<?php
//including connection
 include "../config/connection.php";

 //get the id
 $id = $_GET['id'];

 $delet_query = mysqli_query($con,'DELETE FROM posts WHERE id="'.$id.'"');

 header('location:posts.php');
