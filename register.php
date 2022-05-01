<?php
    include "config/connection.php";


    $msg = "";

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];

        $query = mysqli_query($con,"INSERT INTO users (username,email,name,password) VALUES('".$username."','".$email."','".$name."','".$password."')") or die("ERROR:".mysqli_error($con));

        $msg = '<div class="alert alert-success">Registration is successful!</div>';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container py-4">
        <div class="d-flex justify-content-center">
            <div class="card w-50 bg-primary">
                <div class="card-body">
                    <h4 class="text-white">Signup Here</h4>
                    <?=$msg?>
                    <form  method="POST">
                    <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-white">Username</label>
                            <input type="text" class="form-control" name="username" id="exampleFormControlInput1" placeholder="Enter Username">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-white">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label text-white">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-white">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>