<html>
<head>
	<style type="text/css">
body{
  background-image:url("ooadvalidaton2bg.jpg");
  background-repeat: no-repeat;
  background-size: cover
}
 h2{
  color:black;
  text-align:center;
  font-size: 25px;
  font-family: Lucida Console;
  text-shadow: 0px 15px 15px black;
 }


.box [type="Submit"]{
        
        border: 1px solid black;
        cursor: pointer;
        font-size: 13px solid black;
        font-family: times new roman;

    }
   
    .box{
        box-shadow:0 10px 10px black;
        width: 300px;
        height: 250px;
        margin: auto;
        
    }

</style>
</head>
<body>


<?php
$dbname="info";
$servername = "localhost";
$username = "root";
$password = "";
$user=$_POST["UNAME"];
$pword=$_POST["pass"];
$email=$_POST["UNAME4"];
$mobile=$_POST["UNAME5"];
$address=$_POST["Address"];
$date=$_POST["dob"];

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
if(!$conn){
  echo"Failed"."<br>";
}
$sql="INSERT INTO food(username,password,email,mobile,address,dob)
VALUES('$user','$pword','$email','$mobile','$address','$date')";
if(mysqli_query($conn,$sql)){
  echo "You have been successfully registered with Heaven Relations";
}
else{
  echo "Error";
}
mysqli_close($conn);
?>
<a href="entrance.html"><h2>Return To Login Page</h2></a>

</body>
 </html>