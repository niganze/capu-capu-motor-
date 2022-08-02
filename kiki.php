<?php
$con = mysqli_connect("localhost", "root", "", "motor ticket");
if(isset($_POST['submit']))
{
  $names = $_REQUEST["Username"];
  $fname = $_REQUEST["Fullname"];
  $email = $_REQUEST["email"];
  $phone = $_REQUEST["phone_number"];
  $password = $_REQUEST["password"];
  $verify = $_REQUEST["verifypassword"];
  $gender = $_REQUEST["gender"];
  $select = $_REQUEST["selection"];
  $number = $_REQUEST["number"];
  $select2 = $_REQUEST['selection2'];
      $querry= "INSERT INTO umumotari (Username,Fullname,email,phone_number,Password,
      verifypassword,gender,selection,number,selection2)
    VALUES('$names','$fname','$email',$phone,'$password','$verify','$gender','$select',$number,'$select2')";
    $rs = mysqli_query($con, $querry);
            if($rs){
                echo "<p style='color:darkblue;'>$fname .$names   murakoze kwiyandikisha <br/></p>";
            }else{
                echo "<p style='color:red;' >byanze".mysqli_error($con)."</p>";
            }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href="kiki.css">
</head>

<body>
    <div class="container">
        <div class="heading">uzuza iyi form  wiyandkishe</div>
        <form method="POST" action="kiki.php">
            <div class="card-details">
                <div class="card-box">
                    <span class="details">fullnames</span>
                    <input type="text" name="username"placeholder="enter your name"></br>
                </div>
            </div>
            <div class="card-details">
                <div class="card-box">
                    <span class="details">username</span>
                    <input type="text"name="Fullname" placeholder="enter username"></br>
                </div>
            </div>
            <div class="card-details">
                <div class="card-box">
                    <span class="details">Email</span>
                    <input type="email"name="email" placeholder="enter your email"></br>
                </div>
            </div>
            <div class="card-details">
                <div class="card-box">
                    <span class="details">phone number</span>
                    <input type="tel"name="phone_number" placeholder="enter phone"></br>
                </div>
            </div>
            <div class="card-details">
                <div class="card-box">
                    <span class="details">password</span>
                    <input type="password"name="password" placeholder="enter your password"></br>
                </div>
            </div>
            <div class="card-details">
                <div class="card-box">
                    <span class="password">comfirm ypur password</span>
                    <input type="password" name="verifypassword"placeholder="enter your name"></br>
                </div>
            </div>
    <div class="circal-form">
        <span class="circal-title">GENDER</span>
        <div class="category">
            <input type="radio"name="gender">male
            <input type="radio"name="gender">female
            <input type="radio"name="gender">others
    <label>select your identical card</label>
    Card:<select name="selection"required>
        <option selected hidden> select </option>
        <option value="1">irangamuntu</option>
        <option value="2">passport</option>
        <option value="3">others</option>
    </select><br>
    NIMERO ZICYANGOBWA WAHISEMO<input type="text"name="number"irangamuntu="number"><br>
    RESIDENTUAL ADDRESS:<select name="selection2"required>
        <option selected hidden>select</option>
        <option value="1">TUMBA </option>
        <option value="1">NGOMBA </option>
        <option value="1">MBAZI</option>
        <option value="1">MUKENGO</option>
        <option value="1">RURAL</option> 
        <option value="1">RURAL</option> 
    </select><br>
</div>
</div>
<div class="button">
   <input type="submit" value="Register" name="submit">
</div>
</form>
</div>
</body>
</html>

