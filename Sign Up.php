<?php
$con = mysqli_connect("localhost", "root", "", "capucapu");
if(isset($_POST['submit']))
{
  $names = $_REQUEST["Username"];
  $fname = $_REQUEST["Firstname"];
  $lname = $_REQUEST["Lastname"];
  $email = $_REQUEST["Email"];
  $password = $_REQUEST['Password'];
      $querry= "INSERT INTO iyandikishe (Username,Firstname,Lastname,Email,Password)
    VALUES('$names','$fname','$lname','$email',$password)";
    $rs = mysqli_query($con, $querry);
            // Check if the connection is established
            if($rs){
                echo "<p style='color:darkblue;'>$fname .$lname   is well registered<br/></p>";
            }else{
                echo "<p style='color:red;' >byanze".mysqli_error($con)."</p>";
            }
}
?>
<!DOCTYPE html>
<head><title></title> <link rel="stylesheet" href="cssstyle.css">
</head>
    <body>
        <script type="text/javascript" src="JAVASCRIPT.js"></script>
        <section class="menu_bar_tr">
            <p>hanga konti yawe</p>
     <form action="Sign Up.php" method="POST">
         <select name="names">
             <option selected>---hitamo uwo uriwe--</option>
             <option value="Learner">motari</option>
             <option value="1">umugenzi</option>
         </select>
          <br><br>
        Username :<input type="text" name="Username" required placeholder="izina "><br><br>
        Firstname :<input type="text" name="Firstname" required><br><br>
        Lastname:<input type="text" name="Lastname"><br><br>
        Email:<input type="email" name="Email" placeholder="example@gmail.com" required><br><br>

        Password:<input type="password" name="Password" required="password"><br><br>
        <input type="submit" value="Create" name="submit">
     </form>
    </section>
    </body>
</html>