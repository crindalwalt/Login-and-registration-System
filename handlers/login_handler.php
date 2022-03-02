<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require "../database.php";
    $username = $_POST['username'];
    $password = $_POST['password'];


    $username_search_query = "SELECT * FROM  `users` WHERE `username`='$username'";
    $username_search_query_run = mysqli_query($connection, $username_search_query);
    $rows = mysqli_num_rows($username_search_query_run);
    echo "$rows is the number of row <br>";
    if($rows == 1){
        while($result = mysqli_fetch_assoc($username_search_query_run)){
            $dbpass = $result['password'];
            echo $password;
            if (password_verify("$password",'$2y$10$nGx7uwfnetc625fOK..wbuPG4Av6BBdHtnPzj.tq6m3Bj1lf')) {
                echo "matched";
                session_start();
                $_SESSION['username'] = $result['username'];
                $_SESSION['loggedIn'] = true;
                echo "<br>";
                echo  $_SESSION['username'];
                // header("location: ../home.php");
                echo "right";
            } else {
                // header('location: ../login.php?crendialWrong=true');
                echo "wrong";
            }
        }
    }
    // $result = mysqli_fetch_assoc($username_search_query_run);
    // $password_varification   = password_verify("$password",$result['password']);
    // $dbpass = $result['password'];
    // echo $dbpass;
    // echo var_dump($password_varification);
    // echo $password;
    
    // if (password_verify($password,$result['password'])) {
    //     echo "matched";
    //     session_start();
    //     $_SESSION['username'] = $result['username'];
    //     $_SESSION['loggedIn'] = true;
    //     echo "<br>";
    //     echo  $_SESSION['username'];
    //     // header("location: ../home.php");
    //     echo "right";
    // } else {
    //     // header('location: ../login.php?crendialWrong=true');
    //     echo "wrong";
    // }
    // echo "username = $username <br>Password = $password";
}

?>




<!-- Movies name -->
<!-- 1 faster -->
<!-- 2 texi driver -->