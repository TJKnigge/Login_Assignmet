<?php

require ('session.php');

    session_start();

    if (isset($_POST)& !empty($_POST)){
                
       
    
        $username=$_POST['user'];
        $password=$_POST['passw'];

        $sql="select * FROM `users` WHERE `username`='$username' and `password`= '$password'";
        
        $result= mysqli_query($conn, $sql)
               or die("Failed to connect to DB" . mysqli_error());

       
        
        
      }
?>