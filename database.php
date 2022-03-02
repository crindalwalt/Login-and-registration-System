<?php
//! Connection to the Database
    

    //? Collecting credentials
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "loginSystem";

    //? Sending handshake request
    $connection  = mysqli_connect($host,$user,$pass,$database);


    //? cross checking handshake request
        if(!$connection){
            die("unable to connect". mysqli_connect_error() );
        }else{
            echo "wellcome to your access Mr. crindalwalt <br>";
        }




?>