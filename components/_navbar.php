<?php
// <!-- session_start(); -->
    echo '
    <div id="Navbar">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/learning/loginSystem/handlers/logout_handler.php">Authentication App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                   

                    </ul>
                <div class="d-flex">';
                   if(isset($_SESSION['loggedIn'])){
                    echo ' <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
                     echo   $_SESSION['username'];
                    echo '</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="http://localhost/learning/loginSystem/handlers/logout_handler.php">Logout</a></li>
                    </ul>
                </li>';
                   }else{
                       echo 
                       '<a href="http://localhost/learning/loginSystem/signup.php"><button class="btn btn-success mx-2" type="button" >Sign Up</button> </a>
                       <a href="http://localhost/learning/loginSystem/login.php"><button class="btn btn-success mx-2" type="button" >Sign In</button> </a>';
                    }
                    echo '</div>
            </div>
        </div>
    </nav>
</div>

    
    ';




?>