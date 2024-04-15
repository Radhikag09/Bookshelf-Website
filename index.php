<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Bookshelf.com</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
         <div class="main">
                <ul> 
                    <br>
                    <li><a href="signup.php">Sign Up</a></li>
                    
                </ul>
         </div>
         <div class="title">
            <h1>Welcome to BookShelf</h1>
         </div>
         <div class="button">
            <a href="#" class="btn">HAPPY EXPLORING....</a> 
         </div>
         <div class="registration-form">
            <form method="post">
            <h1>Login Form</h1>
        <?php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT id FROM details WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //   $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        //  session_register("email");
         $_SESSION['login_user'] = $myusername;
         
         header("location: category.php");
      }else {
         echo "<h4>*Your Email or Password is invalid</h4>";
      }
   }
?>            
            <div class="textbox" >
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="textbox">
            <input type="password" id="pass" placeholder="Password" name="pass" required>
            </div>
                                        <button type="submit" class="btn1" name="submit" >Submit</button>
            </form>
         </div>
        </header>
        
    </body>
</html>
