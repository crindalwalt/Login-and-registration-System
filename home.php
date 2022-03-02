<?php
// if (!isset($_SESSION['loggedIn'])) {
//     header('location: login.php?dafa=true');
//     exit();
// } else {
//     echo "ho ja bhai";
// }
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page of website</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.css">
</head>

<body>
<?php include "components/_navbar.php" ?>

    <div class="alert alert-success m-5" role="alert">
        <h4 class="alert-heading">Wellcome <?php echo $_SESSION['username'] ?> </h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">whenever you want to logout click that button <a href="handlers/logout_handler.php">click to logout</a>.</p>
    </div>

</body>
<script src="assets/bootstrap/bootstrap.js"></script>

</html>