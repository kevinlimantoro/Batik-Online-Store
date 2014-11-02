<?php
session_start();
$con=mysqli_connect("localhost:3306","kevin22","revenant","ws");
$u=$_SESSION['username'];
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $result = mysqli_query($con,"show table status like \"batikorder\";");
 $row = mysqli_fetch_array($result);
$count=$row['Auto_increment'];
if(isset($_SESSION['url'])){
$proxy = new SoapClient($_SESSION['url']."/batikserver/services/batikserver?wsdl");}
else{
$proxy = new SoapClient("http://140.118.228.87:8080/batikserver/services/batikserver?wsdl");
}
$total=0;
 foreach($_SESSION['cart'] as $product_id => $quantity) { 
 //echo "Batik ".$product_id." = ".$quantity." Item/s @NTD".$_SESSION['price'][$product_id]."<br>";
 ECHO "Payment Successfully Processed";
 $result=$proxy->OrderFinal(array("clientID"=>1,"orderID"=>$count,"batikID"=>$product_id,"amount"=>$quantity,"price"=>$_SESSION['price'][$product_id],"total"=>$_SESSION['price'][$product_id]*$quantity));
    $result=$proxy->ShippingFinal(array("clientID"=>1,"orderID"=>$count,"batikID"=>$product_id,"amount"=>$quantity,"price"=>$_SESSION['price'][$product_id],"total"=>$_SESSION['price'][$product_id]*$quantity));
    $total+=$_SESSION['price'][$product_id]*$quantity;
	$data = json_decode($result->return, TRUE);
 }
$result=$proxy->ShippingTracking(array("clientID"=>1,"orderID"=>$count));
  $result=$proxy->paymentinfo(array("Card"=>$_SESSION['card'][1],"Name"=>$_SESSION['card'][0],"Ver"=>$_SESSION['card'][3],"type"=>$_SESSION['card'][2],"OrderID"=>$count,"TotalPay"=>$total));  

$result = mysqli_query($con,"insert into batikorder values (0,'".$u."',now());");

 unset($_SESSION['cart']);
 unset($_SESSION['price']);
 
if(isset($_SESSION['url'])){
 header("refresh:3 ; url=index.php?url=".$_SESSION['url']);}
 else{
 header("refresh:3 ; url=index.php");}
?>