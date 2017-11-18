
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
            
            
            </form>   
        </div>
        
        
        
        
        
        <?php
        
       require ('login_session.php');
       require ('session.php');
//       include 'logout_session';
       
        //function connectDB(){
//        $hostname = 'localhost';            
//        $databasenaam = 'login';
//        $username = $_POST['user'];
//        $password = $_POST['passw'];
        
        
//        $conn = mysqli_connect('localhost', $username, $password,'login');
        
        
        
        //$conn= new mysqli($hostname, $username, $password, $databasenaam);
        //return $conn;
        //}
        
        
//        $conn= connectDB();
        
        
          
       
      //login
        
        
        
        
        
        
        
        
//      $row= mysqli_fetch_array($conn);
//        if($row['username'] == $username && $row['password'] == $password){
//           echo "Login suucess full! Welcome". $row['username'];
//       } else {
//           echo "Failed to login!";  
//       }
//        
        
        
       
       
       
       
       
       
       
        
       //$selectDB = mysqli_select_db($C, 'Login'); 
        
//        mysqli_select_db("login");
//
//        $sql= mysqli_query("select* from users where username='$username' and password='$password'")
//               or die("Failed to connect to DB" . mysqli_error());
//       
//        $row= mysqli_fetch_array($sql);
//        if($row['username'] === $username && $row['password'] === $password){
//           echo "Login suucess full! Welcome". $row['username'];
//       } else {
//           echo "Failed to login!";
//       }
//               
               
        ?>
    </body>
</html>
