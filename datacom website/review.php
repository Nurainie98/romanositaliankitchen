<html>
<head>
  <title>Review Form</title>
    	<style>
   body {
  font-family: Times New Roman;
  margin: 2;
  background:#FFFACD;
  }
  div.center {
  float:center;
  padding: 20px;
  border: 5px solid green;
  border-radius: 25px;
  font-family: Georgia;
  text-align:center;
  background-position: center;
}

  </style>
</head>
<body>
<?php

$server="localhost";
$username="root";
$password="";
$my_database="test";

$mysqli = new mysqli($server,$username,"",$my_database);

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];
$method= $_POST['method'];

			  
$sql = "INSERT INTO purchase (customer,address,telephone,method)
VALUES ('".$_POST["name"]."','".$_POST["address"]."','".$_POST["telephone"]."','".$_POST["method"]."')";		
  
mysql_query($sql) or die('Error, insert query failed');


print " <div class='center'><center><p><h1>Review Information</h1></p><br>Name : $name<br>
             Address: $address<br>
             Telephone : $telephone<br>
			 Payment Method : $method</br></center></div> "
			 

?>
<?php
if(isset($_POST['method'])){
	$method= $_POST['method'];
} else {
	echo "We considered You to pay Using Cash Then!;D";
}
?>

<form align="center" name="form1" method="post" action="update.php">
<p><input type="submit" name="Submit" value="EDIT INFORMATION"></p>
</form>
<form align="center" name="form1" method="post" action="successed.php">
<p><input type="submit" name="Submit" value="PROCEED ORDER"></p>
</form>
</body>
</head>
