<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Authentication App</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.css">
</head>

<body>
    <!-- //? Navbar -->
   <?php include "components/_navbar.php" ?>
    <!-- //? Notifications -->
    <?php

     if(isset($_GET['account_creation'])){
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!  </strong> Your account has been created successfullyn now you can login 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    } 
    if(isset($_GET['crendialWrong'])){
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Wrong credentials!  </strong> Email or password does not matched 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    }




    ?>


    <!-- //? Form -->

    <div id="form" class="container mt-5" >
        <h1>Enter Your Credentials below</h1>
        <form class=" mt-3" method="POST" action="handlers/login_handler.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
            
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="checkBox" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Show my form cradentials</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
<script src="assets/bootstrap/bootstrap.js"></script>

</html>