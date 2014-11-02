<?php
session_start();
$con=mysqli_connect("localhost:3306","kevin22","revenant","ws");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $N=$_REQUEST['n'];
  $C=$_REQUEST['c'];
  $V=$_REQUEST['v'];
  $T=$_REQUEST['t'];
if(isset($_SESSION['url'])){
$proxy = new SoapClient($_SESSION['url']."/batikserver/services/batikserver?wsdl");}
else{
$proxy = new SoapClient("http://140.118.228.87:8080/batikserver/services/batikserver?wsdl");
}
$result=$proxy->CekValidation(array("Card"=>$C,"Ver"=>$V,"type"=>$T,"Name"=>$N));
    $data = json_decode($result->return, TRUE);
	if($data=="Verified"){
	echo $data;
	$_SESSION['card'][0]=$N;
	$_SESSION['card'][1]=$C;
	$_SESSION['card'][2]=$T;
	$_SESSION['card'][3]=$V;
	header("refresh:2 ; url=payment.php");
	}
	else{
	echo "Invalid Card!";
	header("refresh:2; url=validation.php");
	}
?>