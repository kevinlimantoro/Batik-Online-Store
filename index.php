
<?php
session_start();
ob_start();
echo"<style type=\"text/css\">";
echo"
body{
background-image:url('fresh_snow.png');
}
#container {
padding-left:10px;
color:#170447; 
background: -moz-linear-gradient(-45deg, #a9fff9,#2426ff );
background: -webkit-gradient(linear, left top, right bottom,from(#a9fff9), to(#2426ff));width:auto;
display:box; 
box-align:stretch; 
-moz-border-radius: 25px;
border-radius: 25px 25px 25px 25px;
border-style:solid;
border-color:#5521e8;
style:dotted;
box-orient:vertical;
margin-bottom:5px;
padding:10px;
box-flex:2;
}";


echo ".header{
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

.categories{
padding:25px 0 25px 18px;
margin:0 0 1px 0
}
.categories li{
font-family:Arial, Helvetica, sans-serif;
list-style-type:none;
background-image:url(html/images/bullet.gif);
background-position:top left;
background-repeat:no-repeat;
padding:0 0 7px 25px;
line-height:17px;
height:18px;
/ height:17px;
display:block;
}
.categories a{
font-family:Arial, Helvetica, sans-serif;
color:#376FFF;
font-weight: bold;
text-decoration:none;
}

.badan{
width:100%;
margin-left:auto;
margin-right:auto;
}
 
.footer{
border : 5px dashed #33CCFF;
text-align:center;
padding-bottom:20px;
padding-top:30px;
width:98%;
margin-top:20px;
height:50px;
margin-left:auto;
margin-right:auto;
float:left;
background-color:#b0c4de
}

.control{
display:box;
box-align:stretch;
-moz-border-radius: 50px;
border-radius: 50px;
box-flex:1;
height:90%;
width:20%;
font-family:Arial, Helvetica, sans-serif;
overflow:auto;
border : 3px ridge #7F4F30;
padding:20px;
margin-top:20px;
margin-right:20px;
margin-left:0px;
float:left;
background-color:#9E6F33;
position:relative;
}
 
 .itemcontainer{
display:block;
box-align:stretch;
-moz-border-radius: 50px;
border-radius: 50px;
box-flex:1;
width:70%;
overflow:auto;
border : 3px ridge #854F0A;
padding:20px;
margin-top:20px;
margin-right:20px;
margin-left:0px;
float:left;
background-color:#D1984F;
position:relative;
}
.itemcontainer .left{
display:box;
box-align:stretch;
-moz-border-radius: 50px;
border-radius: 50px;
box-flex:1;
width:96%;
border : 3px ridge #854F0A;
padding:20px;
margin-top:20px;
margin-left:0px;
float:left;
background-color:#9E6F33;
position:relative;
}

#items{
float:left;
font-family:Arial, Helvetica, sans-serif;
}

#cart{
height:38px;
line-height:16px;
margin:65px 0 0 0;
padding:9px 0 0 50px;
background-image:url(html/images/cart_bg.jpg);
background-position:top left;
background-repeat:no-repeat;
}

.price{
display:block;
width:54px;
float:left;
background-color:#3792AE;
text-align:center;
font-size:12px;
font-family:Arial, Helvetica, sans-serif;
color:#FFFFFF;
font-weight:bold;
line-height:23px;
}

.item{
width:213px;
border:1px solid #BBBBBB;
margin:10px 0 0 0;
float:left;
font-family:Arial, Helvetica, sans-serif;
}
.item p{
display:block;
line-height:23px;
background-color:#F4F8EE;
padding:0 0 0 10px;
float:left;
font-family:Arial, Helvetica, sans-serif;
width:149px;
}
.price{
display:block;
width:54px;
float:right;
background-color:#3792AE;
text-align:center;
font-size:12px;
font-family:Arial, Helvetica, sans-serif;
color:#FFFFFF;
font-weight:bold;
line-height:23px;
}
.center{
margin:10px 10px 0 10px;
}

#inside{
padding:15px 0 0 17px;
float:left;
display: inline;
} 

#main{
width:682px;
float:left;
}

.left{
display:box;
box-align:stretch;
-moz-border-radius: 50px;
border-radius: 50px;
box-flex:1;
width:100%;
border : 3px dashed #33CCFF;
padding:20px;
margin-top:20px;
margin-left:0px;
float:left;
background-color:#58657f;
position:relative;
}
 
.right{
-moz-border-radius: 50px;
border-radius: 50px;
border : 3px dashed #33CCFF;
padding-bottom:20px;
padding-right:20px;
padding-top:20px;
margin-top:20px;
padding-left:20px;
width:40%;
height:auto;
margin-left:20px;
background-color:#58657f;
float:left;
}
.right .right{
width:35%;
height:50%;
overflow:scroll;
float:left;
}";

 function isDomainAvailable($domain)
       {
               //check, if a valid url is provided
               if(!filter_var($domain, FILTER_VALIDATE_URL))
               {
                       return false;
               }

               //initialize curl
               $curlInit = curl_init($domain);
               curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,3);
               curl_setopt($curlInit,CURLOPT_HEADER,true);
               curl_setopt($curlInit,CURLOPT_NOBODY,true);
               curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);

               //get answer
               $response = curl_exec($curlInit);

               curl_close($curlInit);

               if ($response) return true;

               return false;
       }

echo "<body>";
echo"#isi{color:#aad7ff;font-size:150%;}";
echo"</style>";
echo"<body>";
echo"<div class=\"badan\">";
echo"<div class=\"header\"><a style=\"color:#4B4B4B; text-decoration:none;\" href=\"http://140.118.228.185/tokobatik/index.php\">";
echo"Batik Store";
echo"</div></div></a>";


$total=0;
if(isset($_SESSION['cart'])){
 foreach($_SESSION['cart'] as $product_id => $quantity) { 
	$total+=$quantity;
 }}

    //$url="http://localhost:8080/BookSwing/services/mybooks/getBookDetail?ISBN=".$ISBN;
	//$url="http://localhost:8080/BookSwing/services/mybooks?getBookList";
	ini_set('default_socket_timeout', 3);
	try{
	if(isset($_REQUEST['url'])){
	$_SESSION['url']=$_REQUEST['url'];
	$proxy = new SoapClient($_REQUEST['url']."/batikserver/services/batikserver?wsdl");
	}else{
	  $proxy = new SoapClient("https://140.118.109.19/batikserver/services/batikserver?wsdl");
		}//$result = $proxy->getBookDetail(array("ISBN"=>$ISBN));
		$k1=0;
		$k2=0;
		$k3=0;
		$k4=0;
		if(isset($_REQUEST['fromadd'])){
		if(isset($_SESSION['k1'])){
		$k1=$_SESSION['k1'];}
		if(isset($_SESSION['k2'])){
		$k2=$_SESSION['k2'];}
		if(isset($_SESSION['k3'])){
		$k3=$_SESSION['k3'];}
		if(isset($_SESSION['k4'])){
		$k4=$_SESSION['k4'];}
		}
		else{if( isset($_POST['motive'])){
		if($_POST['motive']!="All"){
		$k3=$_POST['motive'];
		$_SESSION['k3']=$k3;}
		else{
		$_SESSION['k3']=0;}
		}
		if( isset($_POST['category'])){
		if($_POST['category']!="All"){
		$k1=$_POST['category'];
		$_SESSION['k1']=$k1;}
		else{
		$_SESSION['k1']=0;}
		}
		if( isset($_POST['type'])){
		if($_POST['type']!="All"){
		$k2=$_POST['type'];
		$_SESSION['k2']=$k2;}
		else{
		$_SESSION['k2']=0;}
		}
		if( isset($_POST['price'])){
		switch ($_POST['price']) {
		case "All";
		$k4=0;
		break;
		case "Low":
        $k4=1;
		break;
		case "Medium":
        $k4=2;
		break;
		case "High":
        $k4=3;
		break;
		}$_SESSION['k4']=$k4;}}
		$result=$proxy->getbatiklist(array("k1"=>$k1,"k2"=>$k2,"k3"=>$k3,"k4"=>$k4));
    $data = json_decode($result->return, TRUE);
	//echo $data["bookTitle"]
	echo"<div class=\"control\">";
	echo "<ul class=\"categories\">";
	if(isset($_SESSION['username'])){
	echo "Welcome ".$_SESSION['username'].". "."<a href=\"logout.php\">Log Out</a>";
	echo "<br>";}
	else{
	if(isset($_REQUEST['url'])){
	echo "<form method=\"post\" action=\"login.php?url=".$_REQUEST['url']."\">";}
	else{
	echo "<form method=\"post\" action=\"login.php\">";
	}echo "Username: "."<input type=\"text\" name=\"u\" size=\"35\" /><br>";
	echo "Password: "."<input type=\"password\" name=\"p\" size=\"35\" /><br>";
	echo "<input type=\"submit\" name=\"submit\" value=\"Login\" /><br>";
	echo "</form>";}
	echo "Search Batik "."<br>";
	if(isset($_REQUEST['url'])){
	echo "<form method=\"post\" action=\"index.php?url=".$_REQUEST['url']."\">";}
	else{
	echo "<form method=\"post\" action=\"index.php\">";
	}
	echo "<li>For</li>"; 
	PRINT '<select name="category">';
	echo '<option value="All">'.All.'</option>'.'<option value="Adult Clothes">'.Adult.'</option>'.'<option value="Kids Clothes">'.Kids.'</option>'.'<option value="Others">'.Others.'</option>';
	PRINT '</select>';
	echo "<li>Motive</li>";
	PRINT '<select name="motive">';
	echo '<option value="All">'.All.'</option>'.'<option value="Solo">'.Solo.'</option>'.'<option value="Jogja">'.Jogja."</option>".'<option value="Semarang">'.Semarang."</option>".'<option value="Pekalongan">'.Pekalongan."</option>";
	PRINT '</select>';
	echo "<li>Type</li>";
	PRINT '<select name="type">';
	echo '<option value="All">'.All.'</option>'.'<option value="Hand Made">'."Hand Made".'</option>'.'<option value="Factory Made">'."Factory Made".'</option>';
	PRINT '</select>';
	echo "<li>Price Category</li>";
	PRINT '<select name="price">';
	echo '<option value="All">'.All.'</option>'.'<option value="Low">'.Low.'</option>'.'<option value="Medium">'.Medium."</option>".'<option value="High">'.High."</option>";
	PRINT '</select>';
	echo "<input type=\"submit\" name=\"submit\" value=\"Search\" />";
	echo "</form>";
	if(isset($_SESSION['cart'])){
	echo "<div id=\"cart\"><strong>Shopping cart:</strong> <br />".$total." items</div>";
	if(isset($_SESSION['username']))
		{
		if(isset($_SESSION['card'])){
		echo "<a href=\"payment.php\">Go To Payment</a>";
		}
		else{
		echo "<a href=\"validation.php\">Go To Payment</a>";
		}
		//echo "<a href=\"checkout.php\">Go To Payment</a>";
		}
	}
	echo "</ul>";
	echo"</div>";
	echo "<div class=\"inside\">";
	echo "<div class=\"items\">";
	if(count($data)==0){
	echo "Nothing in this selection";}
	for($i=0; $i<count($data); $i++)
	{echo"<div class=\"item\">";
	echo "<a href=\"#\"><img src=\"http://".$data[$i]["image"]."\""." width=\"213\" height=\"192\" /></a><br />";
	echo "ID"." : "."<a href=\"link\">"."batik".$data[$i]["id"]."</a><BR>";
	echo "For"." : ".$data[$i]["kat_1"]."<BR>";
	echo "Type"." : ".$data[$i]["kat_2"]."<BR>";
	echo "Motive Origin"." : ".$data[$i]["kat_3"]."<BR>";
	echo "<div class=\"price\">"."NT$".$data[$i]["price"]."</div><BR>";
	//echo "<a href=\"unfollow.php?user=$photoname\"><input type=\"button\" value=\"Unfollow\"></a></div>";
	echo "<a href=\"addcart.php?id=".$data[$i]["id"]."&price=".$data[$i]["price"]."\"><input type=\"button\" value=\"add to cart\">";
	echo"</div>";};echo "</div></div>";
	}
	catch (SoapFault $e) {
    echo "Website DOWN Redirect to Home in 3 seconds";
		  header("refresh:3 ; url=index.php?url=http://140.118.228.57:8080");
		die();
}
	//print_r($data);
//  print_r($result);
		//  echo $result->return;
   // $json = file_get_contents($url);
      /*if site down*/
?>