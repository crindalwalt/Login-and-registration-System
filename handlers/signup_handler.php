<?php
    if($_SERVER['REQUEST_METHOD']== "POST"){

        //? Connecting to the Server
        $require =  include '../database.php';
      

        //? Grabbing Form elements
        $nameF = $_POST['nameF'];
        $nameL = $_POST['nameL'];
        $password = $_POST['password'];
        $cPassword = $_POST['cPassword'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $role = 0;

//* Validations
       //? Username in database check
        $email_check = "SELECT * FROM `users` WHERE `users`.`username` = '$username'";
        $email_check_run = mysqli_query($connection, $email_check);
        $username_in_db = mysqli_num_rows($email_check_run);
       
        if(!$username_in_db){
            //? password mismatched check
            $passwordMatch = $password == $cPassword;
            if($passwordMatch){
    
                //? hashing password
                $hash = password_hash($password,PASSWORD_DEFAULT);

                //? Inserting user into the database
            
                $insertion_query = "INSERT INTO `users` ( `firstName`, `lastName`, `email`, `password`, `role`, `date`, `username`) VALUES ( '$nameF', '$nameL', '$email', '$hash', '$role', 'current_timestamp(6).000000', '$username')";
                // echo $insertion_query;
                $insertion_query_run = mysqli_query($connection,$insertion_query);
                var_dump($insertion_query_run);
                if($insertion_query_run){
                    //? All ok
                    header('Location: ../login.php?account_creation=true');

                }else{
                    header('Location: ../signup.php?tech_error=true');
                }
            }else{
                header('Location: ../signup.php?password_mismatched=true');
            }
        }else{
            
            header('Location: ../signup.php?username_in_db=true');
        }
       
    }


?>