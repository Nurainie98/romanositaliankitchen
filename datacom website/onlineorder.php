<?php
require_once 'config.php';
?>
<?
$no = $_POST['No'];
$Firstname = $_POST['Firstname'];
$LastName = $_POST['LastName'];
$ContactNumber = $_POST['ContactNumber'];
$ItalianLasagna= $_POST['ItalianLasagna'];
$FettucineAlfredo = $_POST['FettucineAlfredo'];
$ItalianPizza = $_POST['ItalianPizza'];
$ItalianShrimpPasta = $_POST['ItalianShrimpPasta'];
$Bruschetta = $_POST['Bruschetta'];
$Pickuporder= $_POST['Pickuporder'];
$DeliveryAdress = $_POST['DeliveryAddress'];
$SelectTime = $_POST['SelectTime'];


        $sql = "INSERT INTO order form (Firstname, LastName, ContactNumber, ItalianLasagna, FettucineAlfredo, ItalianPizza, ItalianShrimpPasta, Bruschetta, Pickuporder, DeliveryAddress, SelectTime) VALUES ('".$_POST['Firstname']."','".$_POST['LastName']."','".$_POST['ContactNumber']."','".$_POST['ItalianLasagna']."', '".$_POST['FettucineAlfredo']."','".$_POST['ItalianPizza']."','".$_POST['ItalianShrimpPasta']."','".$_POST['Bruschetta']."','".$_POST['Pickuporder']."','".$_POST['DeliveryAddress']."','".$_POST['SelectTime']."')";

        if (mysqli_query($conn, $sql)) {
           echo "Your order has been submitted sucessfully!";
          } else {
          echo "Error! Please try again later.";
            }
?>

<!DOCTYPE html>
<html>
<head>
	<style>
body {
  background-image: url('picture/background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>

	<title>Romano's Italian Kitchen ONLINE ORDER</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
		
		<div class="row"> 
			<div class="logo">
			<img src="picture/logo1.png"> 
		    <ul class="main-nav">
			<li><a href="./index.html"> HOME </a></li>
			<li><a href="./menu.html"> MENU </a></li>
			<li><a href="./onlineorder.php"> ONLINE ORDER </a></li>
			<li><a href="./team.html"> TEAM </a></li>
			<li><a href="./contact.html"> CONTACT </a></li>
		</ul>	
		</div>
	</div>
	

<div class="hero">	
<h1 style="font-size: 80px;margin-top: 80px;text-align: center;font-family:Lastnocis;text-transform:capitalize;">Restaurant Order Form</h1>
<div class="ORDERSECTION">
<form action="" method="post">
<center>

  <label style="color:white;font-size:16px;font-family: Thunaedy;" for="fname" name="First name">First name:</label>
  <input type="text" id="fname" name="Firstname" value="" size="30"><br><br>

  <label style="color:white;font-size:16px;font-family: Thunaedy;" for="lname" name="Last Name">Last name:</label>
  <input type="text" id="lname" name="LastName" value="" size="30"><br><br>

   <label style="color:white;font-size:16px;font-family: Thunaedy;" for="contact" name="ContactNumber">Contact Number:</label>
  <input type="text" id="contact" name="ContactNumber" value="" size="30"><br><br>


  <label style="color:white;font-size:16px;font-family: Thunaedy;" for="dishes" >Choose Your Dishes:</label><br><br>

  <input type="checkbox" id="menu1" name="ItalianLasagna" value="Italian-lasagna">
  <label style="color:white;font-size:16px;font-family: Thunaedy;margin-right: 20px;" for="menu1" name="Italian Lasagna">Italian Lasagna</label><label style="color:white;font-size:16px;font-family: Thunaedy;" for="quantity">Quantity:</label><input type="number" id="quantity" name="quantity" min="1" max="100"><br><br>
 

  <input type="checkbox" id="menu2" name="FettuccineAlfredo" value="Fettuccine Alfredo">
  <label style="color:white;font-size:16px;font-family: Thunaedy;margin-right: 20px;" for="menu2" name="Fettuccine Alfredo">Fettuccine Alfredo</label><label style="color:white;font-size:16px;font-family: Thunaedy;" for="quantity">Quantity:</label><input type="number" id="quantity" name="quantity" min="1" max="100"><br><br>

  <input type="checkbox" id="menu3" name="ItalianPizza" value="Italian Pizza">
  <label style="color:white;font-size:16px;font-family: Thunaedy;margin-right: 20px;" for="menu3" name="Italian Pizza">Italian Pizza</label><label style="color:white;font-size:16px;font-family: Thunaedy;" for="quantity">Quantity:</label><input type="number" id="quantity" name="quantity" min="1" max="100"><br><br>

  <input type="checkbox" id="menu4" name="ItalianShrimpPizza" value="Italian Shrimp Pasta">
  <label style="color:white;font-size:16px;font-family: Thunaedy;margin-right: 20px;" for="menu4" name="Italian Shrimp Pasta">Italian Shrimp Pasta</label><label style="color:white;font-size:16px;font-family: Thunaedy;" for="quantity">Quantity:</label><input type="number" id="quantity" name="quantity" min="1" max="100"><br><br>

  <input type="checkbox" id="menu5" name="Bruschetta" value="bruschetta">
  <label style="color:white;font-size:16px;font-family: Thunaedy;margin-right: 20px;" for="menu5" name="Bruschetta">Bruschetta</label><label style="color:white;font-size:16px;font-family: Thunaedy;" for="quantity">Quantity:</label><input type="number" id="quantity" name="quantity" min="1" max="100"><br><br>



  <label style="color:white;font-size:16px;font-family: Thunaedy;" for="dishes" name="Pickup order">Do you want to pick up your order?:</label><br>

  <input type="checkbox" id="nodelivery" name="Pickuporder" value="Yes">
  <label style="color:white;font-size:16px;text-align: left;font-family: Thunaedy;margin-right: 210px" for="menu7">Yes.</label><br>

  <input type="checkbox" id="delivery" name="Pickuporder" value="No">
  <label style="color:white;font-size:16px;text-align: left;font-family: Thunaedy;margin-left: 0px;margin-right: 73px; " for="female">No, I request for a delivery</label><br><br>

<label style="color:white;font-size:16px;font-family: Thunaedy;" for="adress" name="Delivery Adress">Delivery Adress:</label>
 <input type="text" id="adress" name="DeliveryAddress" value="" size="50"><br><br>


  
  <label style="color:white;font-size:16px;font-family: Thunaedy;margin-left: 230px" for="appt" name="SelectTime">Select a time for delivery:</label>
  <input type="time" id="appt" name="SelectTime" style="margin-right: 545px"><br><br>

  <input type="submit" value="Submit">
  
 </center>	

</form> 
</div>
</div>

</header>
</body>
</html>