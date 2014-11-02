<?php
session_start();
ob_start();
echo"<style type=\"text/css\">";
echo"form {width: 40%;
      margin-right: 30%;
      margin-left: 30%;
	  padding-top:20%;text-align: center;}
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
echo   "<FORM method=\"post\" action=\"checkvalid.php\">";
echo "Name:        "."<input type=\"text\" name=\"n\" size=\"35\" /><br>";
	echo "Card Number:      "."<input type=\"text\" name=\"c\" size=\"35\" /><br>";
	echo "Verification Number: "."<input type=\"text\" name=\"v\" size=\"35\" /><br>";
	PRINT 'Type : <select name="t">';
	echo '<option value="0">'.Visa.'</option>'.'<option value="1">'.'Master Card'.'</option>';
	PRINT '</select></br>';
	echo "<input type=\"submit\" name=\"submit\" value=\"Verify\" /><br>";
	
echo "</FORM></DIV>";
?>