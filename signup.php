

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
    <!-- //? Alerts for users -->
    <div id="alerts">
<?php
        if(isset($_GET['username_in_db'])){
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Username Already Exist! </strong> You should try a unique one 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
        }
        if(isset($_GET['password_mismatched'])){
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Password does not matched! </strong> Password and confirm password must be same
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
        } if(isset($_GET['tech_error'])){
            echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Error </strong> Your account could not have been created due to some techniqle error
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ';
        }

        
?>
    </div>



    <!-- //? Form -->

    <div id="form" class="container m-5">
        <h1>Enter Your Credentials below</h1>
        <form class=" mt-3" method="POST" action="handlers/signup_handler.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="nameF" class="form-label">First Name</label>
                <input type="text" class="form-control" id="nameF" name="nameF" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="nameL" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="nameL" name="nameL" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="cPassword" class="form-label">Confirm your Password</label>
                <input type="password" class="form-control" name="cPassword" id="cPassword">
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