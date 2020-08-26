<html>
<head>
	<title>OTP entry</title>
	<style type="text/css">
body{
background-image:url("otpbg.png");
background-repeat: no-repeat;
background-size:cover;
}
</style>
</head>
<body>

<center><h3><?php echo "An OTP has been sent to your mobile number:{$_POST["mobilenum"]}"?></h3> <br />
<h3><?php echo "The OTP will last only for five minutes" ?></h3><br/></center>

<form name=otp id=otp method="post" action="otp.php">
	<h2><center>Enter your OTP:<input type="number" name="otp" maxlength="6"  pattern="[0-9]{6}" onkeyup="this.value = this.value.replace(/[^0-9]/, '')"  required></center></h2>
	<center><input type="submit" name="Proceed to Pay" value="Proceed to pay"></center>

</form>
<?php
$dbname="card";
$servername = "localhost";
$username = "root";
$password = "";
$cardname=$_POST["firstname"];
$cardnumber=$_POST["cnum"];
$cvnumber=$_POST["cvv"];
$mobile=$_POST["mobilenum"];
$date=$_POST["exp"];

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if(!$conn){
  echo"Failed"."<br>";
}
$sql="INSERT INTO details(name,cnumber,cvvnumber,mnum,expiry)
VALUES('$cardname','$cardnumber','$cvnumber','$mobile','$date')";
if(mysqli_query($conn,$sql)){
  echo "Successful";
}
else{
  echo "Error";
}
mysqli_close($conn);
?>

</body>
 </html>