
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login page</title>
<!--        <link rel = "stylesheet" type = "text/css" href="login_style_sheet">-->
        
        <style>
            
            body{
                background: #0099ff
            }
            
            #form{
                border: black 1px; 
                border-radius: 5px;
                margin: 100px auto;
                background: white;
                padding: 40px;
                width: 20%;
            }
            
            #btn{
                background-color: green;
                color: whitesmoke;
                padding: 5px;
                margin-left: 69%;
            }            
    
            h1{
                text-align: center;
            }
            
            h4{
                margin-top: 20px;
            }
            
        </style> 
        
        
    </head>
    <body>
        
        <h1><font color="darkred">Welcom to the universal production!</h1>
        
        <div id = "form">
            <form method=" POST" > 
<!--                action="login_session.php">-->
        <h4> <font color="black">Please enter username and password</h4>
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
