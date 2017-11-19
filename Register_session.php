
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register page</title>
        
        <link rel = "stylesheet" type = "text/css" href="login_style_sheet.css">
       
        <script>
        $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format"; 
            }
            
            
            
            
        </script>
        
        
        
    </head>
    <body>
        
        
        
        <div id = "form">
            <form> 
<!--                action="login_session.php">-->
        <h4> <font color="black">Welcome please fill in the form</h4>
            <p>
                Username:<input type="text" id="nwuser" name="nwuser" placeholder="new user" required>
            </p>
            <p>
                Password:<input type="password" id="passw" name="passw" placeholder="passwoord" required>
            </p>
            <p>
                Email adress:<input type="email" name="email" placeholder="john@example.tst" required ><br>
            
            <p>
                <button class="primary" id="submit" value="submit" > Submit </button>
                <a class="primary" href="logout_session.php">Logout</a>
            </p>
            
            
            
            </form>   
        </div>


 alert(hi);

    <?php

       session_start();
       require ('session.php');
       require ('index.php');
       
       
       
       
       
       
       
       
    ?>

   </body>
</html>      