<?php
$con = mysqli_connect ("localhost", "root", "", "capucapu");
if(isset($_POST['submit']))
{
  $name = $_POST["username"];
  $pass = $_POST["password"];
    $querry= "SELECT `username`, `password` FROM `users` WHERE username='$name' && password='$pass'";
    $results = mysqli_query($con, $querry);
    $results2 = mysqli_num_rows($results);
            // Check if the connection is established
            if($results2>0){
                header("location:../motor/interface.html");
            }else{
                // echo "<p style='color:red;' >byanze".mysqli_error($con)."</p>";
            }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="styleonlockedhome.css" />
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleonlockedhome.css">
    <link rel="stylesheet" href="readmore.css">
    <link rel="stylesheet" href="comment.css">
   <link rel="stylesheet" href="form.css">
   <link rel="stylesheet" href="footerhome.css">
   <link rel="stylesheet" href="discover.css">
   <link rel="stylesheet" href="sccstyle.css">
   <link rel="stylesheet" href="signup.css">
    <title>Home</title>
</head>
<body>
    <header class="header">
        <img src="logo.jfif" id="logo" alt="" />
       <marquee behavior="bold" direction="right"><p>capu capu motar</p></marquee> 
    
        <nav class="navbar">
            <a class="help" href="" target="Home">ikaze</a>
        </nav>
   </header>
<div class="background-image">
    <div class="background-content">
        <h1>
            Hello you have been reached on capu capu motor tiket<br />
            UKOZE AMAHITAMO MEZA 
        </h1>
        <p>
            welcome again to capu capu motor site tuguhuza numumotari aho aba uri hose mugihe gito cyane  <br />
            Yego rimwe utegereza motor kumuhanda utazi igihe uru bwayibonere we are here 
             to help each of us to have good and proper mamagement of your time , saving your time now
        </p>
        <a href="readmore.html">Read more</a>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social">
                <a href="https://www.instagram.com"><i class="icon ion-social-instagram"></i></a><a href="https://www.snapchat.com"><i
                        class="icon ion-social-snapchat"></i></a><a href="https://www.twitter.com"><i
                        class="icon ion-social-twitter"></i></a><a href="https://www.facebook.com"><i class="icon ion-social-facebook"></i></a>

            </div>
            <p class="copyright">capu capu motor all right reserved@mcAL2022</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js">
    </script>
    <div class="center">
    <form method="post" action="">

        <h1>LOGIN HERE</h1>
        <method="post">
            </method>
            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login" name="submit">
            <div class="signup_link">
                Not a member? <a href="sign up.php">Signup</a>
            </div>
    </form>
    
</div>
</body>

</html>