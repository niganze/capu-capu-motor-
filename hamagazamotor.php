<?php
$con = mysqli_connect("localhost", "root", "", "capucapu");
if(isset($_POST['submit']))
{
  $names = $_REQUEST["name"];
  $fname = $_REQUEST["email"];
  $lname = $_REQUEST["telephone"];
  $email = $_REQUEST["address"];
      $querry= "INSERT INTO booking (name,email,telephone,address)
    VALUES('$names','$fname',$lname,'$email')";
    $rs = mysqli_query($con, $querry);
            // Check if the connection is established
            if($rs){
                echo "<p style='color:darkblue;'>$fname .$lname   ibyo mwasabye biri gukorwa<br/></p>";
            }else{
                echo "<p style='color:red;' >byanze".mysqli_error($con)."</p>";
            }
}
?>
</hr>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="hamagaza.css">
 <script src="booking.js"> 
 var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}
 </script>
    <title>Document</title>
</head>
<body>
  
  
    <form action="" method="post">
        <div class="wrapper">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name" placeholder="amazina"  required>
        </div>
        <div class="wrapper">
          <label for="email">Your E-mail</label>
          <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
        </div>
        <div class="wrapper">
          <label for="phone">Your Phone</label>
          <input type="tel" id="phone" name="telephone" placeholder="telephone" required>
        </div>
        <div class="wrapper">
          <label for="phone">AHO MOTOR AGUSANGA</label>
          <input type="text" id="address" name="address" placeholder="aho uri location " required>
        </div>
        <div class="btn"><input type="submit" value="Create" name="submit"></div>
        
      </form>
</body>
</html>












