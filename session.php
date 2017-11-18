
<?php


    $hostname = 'localhost';       
    $databasenaam = 'login';
    $username = 'root';
    $password = '';
        
        
        $conn = mysqli_connect($hostname, $username, $password, $databasenaam);
        
        
        if (!$conn){
            die("DB failed to connect" . mysqli_error($conn));
        }
        
        
        
?>
