
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login page</title>
<!--        <link rel = "stylesheet" type = "text/css" href="login_style_sheet">-->
        
        
        
        
    </head>
    <body>
        <div id = "form">
            <form method=" POST" > 
<!--                action="login_session.php">-->
            <p>
                <label>Username:</label>
                <input type="text" id="user" name="user" required>
            </p>
            <p>
                <label>Password:</label>
                <input type="text" id="passw" name="passw" required>
            </p>
            <p>
                <input type="submit" id="btn" value="Login">
            </p>
            
            
            </form>   
        </div>
        
        
        
        
        
        <?php
        
//       include 'login_session';
//       include 'session';
//       include 'logout_session';
       
       function connectionDB() {

        $hostname = 'localhost';            
        $databasenaam = 'login';
        $username = 'root';
        $password = '';

        $conn = new mysqli($hostname, $username, $password, $databasenaam); 
        return $conn;
       }
       
        ?>
    </body>
</html>
