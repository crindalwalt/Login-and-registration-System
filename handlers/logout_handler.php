<?php
 if(!isset($_SESSION['loggedIn']) AND $_SESSION['loggedIn']  == true){
    header('location: ../login.php');

 }else{
     session_start();
     session_unset();
     session_destroy();


     header('location: ../login.php');
 }
















?>