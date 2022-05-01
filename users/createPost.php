<?php
require "../config/connection.php";

$title_error = $post_error = $file_error = "";


$post_title = "";

$file_errors = [];

//check if submit button is click
if (isset($_POST["submit_post"])) {
    //collection form data
    $post_title = test_input($_POST['post_title']);
    $slug = test_input($_POST['slug']);
    $post_body = test_input($_POST['post_body']);

    $file_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    //validatin title field
    if(empty($post_title))
    {
        $title_error = '<div style="color: red">title field is required</div>';
    }

    //validation post body
    if(empty($post_body))
    {
        $post_error = '<div style="color: red">post body field is required</div>';
    }

    //validating file field
    if(empty($file_name))
    {
        $file_error = '<div style="color: red">post image field is required</div>';
    }

    //allowed file types
    $file_types = array("png","jpeg","jpg");

    //extracting file extention
    $file_extention =@strtolower(end(explode('.',$file_name)));

    //checking file extension
    if(!in_array($file_extention,$file_types))
    {
        $file_errors[] = 'png, jpeg, jpg are the only allowed file types';
    }

    //checking file size
    if($_FILES['image']['size'] > 2097152)
    {
        $file_errors[] = 'file size must not be greater than 2mb';
    }

    //checking if there is no validation errors then upoad the file and submit the form
    if(!empty($post_title) && !empty($post_body) && !empty($file_name) && empty($file_errors))
    {
        //moving file to a directory
        $upload = move_uploaded_file($tmp_name, "../uploads/" . $file_name);

        if ($upload) {
            //saving to database
            $query = mysqli_query($con, 'INSERT INTO posts (post_title,post_body,slug,post_img) VALUE("' . $post_title . '","' . $post_body . '","' . $slug . '","' . $file_name . '")') or die("Error: " . mysqli_error($con));

            if ($query) {
                echo '<script> alert("Post uploaded successfuly")</script>';
            }
        }
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
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
    <h3>Create Post</h3>
    <hr />

    <form method="POST" enctype="multipart/form-data">
        <label>Post Title</label>
        <input name="post_title" placeholder="Enter Post Title" value="<?=$post_title?>">
        <br>
        <?php echo $title_error;?>
        <br />
        <label for="">Slug</label>
        <input type="text" name="slug" placeholder="Enter Slug">
        <br />
        <label for="">Post Body</label>
        <textarea name="post_body" id="" cols="30" rows="10"></textarea>
        <br />
        <?=$post_error?>
        <br />
        <label for="">Post Image</label>
        <input type="file" name="image">
        <br/>
        <?=$file_error?>
        <?php
         foreach($file_errors as $error)
         {?>
         <div style="background: red;"><?=$error?></div>
        <?php
         }
        ?>
        <br>
        <button type="submit" name="submit_post">Submit Post</button>
    </form>

</body>

</html>