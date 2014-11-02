<?php
session_start();
$con=mysqli_connect("localhost:3306","kevin22","revenant","ws");
$u=$_REQUEST['u'];
$p=$_REQUEST['p'];
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM member where Account='".$u."' and Password='".$p."'");

while($row = mysqli_fetch_array($result))
  {
  echo "Login Success";
	$_SESSION['username']=$u;
  }

mysqli_close($con);
if(isset($_SESSION['url'])){
header("refresh:1 ; url=index.php?url=".$_SESSION['url']);}
else{
header("refresh:1 ; url=index.php");
}
?>