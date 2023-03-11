<?php
    include 'connect_database.php';
    session_start();

    if(isset($_POST['submit']))
    {
        $user_name = mysqli_real_escape_string($database, $_POST['user_name']);
        $password =  password_hash($_POST['password'], PASSWORD_DEFAULT); 
        //  $sql = "SELECT * FROM users WHERE email='$email' and password='$password'";

        $sql = "INSERT INTO user (email, password ) VALUES ('$user_name', '$password' )";
    
        // $result = mysqli_query($conn, $sql); 

        if (mysqli_query($database, $sql)) 
        {
            $_SESSION['customer'] = $email;
            header('location:cart.php');
        } 
        else 
        {
            $_SESSION['error_message']=mysqli_error($database);
            header('location:signup.php');
            
        }
        
    }

?>