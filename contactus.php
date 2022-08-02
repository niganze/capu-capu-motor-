<?php
$con = mysqli_connect("localhost", "root", "", "capucapu");
if(isset($_POST['submit']))
{
  $names = $_REQUEST["name"];
  $fname = $_REQUEST["subject"];
  $lname = $_REQUEST["andika"];
  $email = $_REQUEST["igitekerezo"];
      $querry= "INSERT INTO contact (name,subject,andika, igitekerezo)
    VALUES('$names','$fname','$lname','$email')";
    $rs = mysqli_query($con, $querry);
            // Check if the connection is established
            if($rs){
                echo "<p style='color:darkblue;'>$fname .$names   ibyo mwasabye biri gukorwa<br/></p>";
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
    <link rel="stylesheet" href="kami.css">
    <link rel="stylesheet" href="styless.css"/>
    <title>Document</title>
    <script src="https://ajax">
    </script>
    <script>
        $(document).ready(function(){
          $(".btn").click(function(){
            $(".input, .area").val(""); 
          })
        })
    </script>
</head>
<body>
    <selection>
    div class="banner">
      <div class="navbar">
        <img src="logo.jfif" class="logo">
        <p></p>
        <a href='website.html'>capu capu motor</a>
        <ul>
          <li><a href="HEADING.HTML" target="home">HOME</a></li>
          <li><a href="about us.html"target="home">about us </a></li>
          <li><a href="contactus.php"target="home">CONTAT US </a></li>
          <li><a href="link2.html"target="home">USERGUIDE</a></li>
          <li><a href="hamagazamotor.php"target="home">HAMAGAZA MOTOR</a></li>
        </ul>
        </div>
<div class="contanainer">
    <p>contact us</p>
    <div class="login">
        <input type="text"class="input"name="name" placeholder="amazina yawe yose" required>
        <input type="text"class="input"name="subject" placeholder="andika nimero ya telephone yawe" required>
    </div>
    <div class="subject">
        <input type="text"class="input"name="andika" placeholder="INGINGO USHAKAKO TUGUSUBIZAHO IBYO UBONA BITAGENDA NEZA" required>
    </div>
    <div class="msg">
        <textarea class="area"name="igitekerezo"placeholder="andika igitekerezo , ikibazo se, inyunganizi ibyo wifuza kubyerekeye na services tuguha"required></textarea>
    </div>
    <input type="submit" value="OHEREZA" name="submit">
    </selection>
</body>
</html>