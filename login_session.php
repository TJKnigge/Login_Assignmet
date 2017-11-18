<?php

session_start();
require ('session.php');

    

    if (isset($_POST)& !empty($_POST)){
                
       
    
        $username=$_POST['user'];
        $password=$_POST['passw'];

        $sql="select * FROM `users` WHERE `username`='$username' and `password`= '$password'";
        
        $result= mysqli_query($conn, $sql)
               or die("Failed to connect to DB" . mysqli_error());

        $row= mysqli_fetch_array($result);
        if($row['username'] == $username && $row['password'] == $password){
           echo "Login success full! Welcome " .  $row['username'];
       } else {
            echo "Sorry, you are not in our database " . $username . "!";
       }
       
        
        
      }
?>