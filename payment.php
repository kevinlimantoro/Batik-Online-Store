<?php
session_start();
ob_start();
echo"<style type=\"text/css\">";
echo"form {width: 40%;
      margin-right: 30%;
      margin-left: 30%;
	  text-align: center;
	  background-color:white;}
body{
background-image:url('fresh_snow.png');
}

.header{
border : 5px inset #A55007;
text-align:center;
font-family:brush script mt;
padding-bottom:20px;
padding-right:20px;
font-size:600%;
color:#E3E1D3;
width:100%;
height:150px;
margin-left:auto;
margin-right:auto;
float:left;
clear:right;
clear:bottom;
background-image:url('batikbanner.jpg');
background-color:#b0c4de
}

div.mainform {width:100%;
              border:1px solid #000}";
echo "<body>";
echo"#isi{color:#aad7ff;font-size:150%;}";
echo"</style>";
echo"<body>";
echo"<div class=\"badan\">";
echo"<div class=\"header\"><a style=\"color:#4B4B4B; text-decoration:none;\" href=\"http://140.118.228.185/tokobatik/index.php\">";
echo"Batik Store";
echo"</div></div></a>";
echo "<DIV ID=\"MAINFORM\">";
echo "<FORM method=\"link\" action=\"index.php\">";
echo "<Strong>Card Detail : </br>";
echo "Name : ".$_SESSION['card'][0];
echo "<br>Card Number : ".$_SESSION['card'][1]."</br>";
if($_SESSION['card'][2]==0){
echo "<img src=\"visa.jpg\" border=0><br><br>";}
else{
echo "<img src=\"master.jpg\" border=0><br><br>";}
echo "</Strong>";
$count=0;
$total=0;
foreach($_SESSION['cart'] as $product_id => $quantity) { 
 {
 echo "Batik ".$product_id." = ".$quantity." Items | @NT$".$_SESSION['price'][$product_id]." | Total :".$_SESSION['price'][$product_id]*$quantity."<br>";}
 $count+=$quantity;
 $total+=$_SESSION['price'][$product_id]*$quantity;
 }
 echo $count." Items<br>";
 echo "Total NT$".$total."<br>";
 echo "<input type=\"submit\" name=\"submit\" value=\"Shop More\" />";
echo "</FORM>";
echo "<FORM method=\"link\" action=\"checkout.php\">";
echo "<input type=\"submit\" name=\"submit\" value=\"Checkout and Pay\" />";
echo "</FORM>";
echo "</DIV>";
?>