
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login page</title>
        <link rel = "stylesheet" type = "text/css" href="login_style_sheet.css">
       
    </head>
    <body>
        
        <h1><font color="darkred">Welcom to the universal production!</h1>
        
        <div id = "form">
            <form method="POST" > 
<!--                action="login_session.php">-->
        <h4> <font color="black">Please enter username and password</h4>
            <p>
                Username:<input type="text" id="user" name="user" placeholder="user" required>
            </p>
            <p>
                Password:<input type="password" id="passw" name="passw" placeholder="passw" required>
            </p>
            <p>
                <button type="submit" id="btn" value="login" > Login </button>
            </p>
<!--            <p>
                <button type="submit" id="out" value="logout" > Logout </button>
                <a type="submit" href="logout_session.php"></a>
            </p>-->
            <p>
                
                <!--<button class="primary" id="reg" value="register"  href="Register_session.php"> Register</button>-->
                <a class="primary" href="Register_session.php">Register</a>
          
            </p>   
            
            </form>   
        </div>
        
        
        
        
        
        <?php
        
       require ('login_session.php');
       require ('session.php');
//       require ('logout_session.php');
//       require ('Register_session.php');

               
        ?>
    </body>
</html>
