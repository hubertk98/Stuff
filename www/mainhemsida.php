<!DOCTYPE html>
<html>

	<head>

		<link rel="Stylesheet" href="mainhemsida.css" > 

	</head>
	<body>

		<p id="rubrik"> Jaok mouse pads </p>

		<a href="logout.php"> <div class="menu"> Logout </div> </a>

		<div class="nav"> 
				<a href=""> <p class="menu"> Shop </p>	</a>			
				<a href=""> <p class="menu"> kundvagn </p> </a>		
		</div>

		<div class="text">
			<p>Welcome to Jaok mouse pad shop </p>
		</div>


	</body>


<?php 
require_once("mysql_connect.php"); // $dbc
if(!empty($_GET['search'])){
	$query='SELECT * FROM Products WHERE Product_name LIKE "%'.$_GET['search'].'%";';
	$result=mysqli_query($dbc,$query);
}else{
	$query="SELECT * FROM Products;";
	$result=mysqli_query($dbc,$query);
}
while($row=mysqli_fetch_array($result)){
	echo'
		<div class="itemContainer" id="first">
			<div class="itemPicture"><img src="" alt="Produkt"/></div>
			<div class="itemName"><p>'.$row['Product_name'].' </p></div>
			<div class="itemInfoBox"><p>'.$row['Description'].'</p></div>
			<div class="itemButtonContainer">
				<div class="itemPrice"><p>'.$row['Price'].' </p></div>
				<a href="#lask"><div class="itemBuyButton"><p> Köp </p></div></a>
			</div>
		</div>
	';
}
?>