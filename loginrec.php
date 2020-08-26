<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "info";

$conn=mysqli_connect($host,$user,$pass);

mysqli_select_db($conn, $db);

if(isset($_POST['lid']))
{

$username=$_POST['lid'];

$password=$_POST['pass'];

$sql="SELECT * FROM food where username='".$username."' AND password='".$password."'LIMIT 1";
$res=mysqli_query($conn, $sql);
if(mysqli_num_rows($res)==1)
{
$_SESSION["lid"]=$username;
header('Location:todayphp.php');
}

else
{
 header('Location:entrance.php');
}
}
?>
 




</body>
</html>
