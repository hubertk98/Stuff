<!DOCTYPE html>
<html>

	<head>

		<link rel="Stylesheet" href="mainhemsida.css" > 
		<meta charset="utf-8">

	</head>
	<body>

		<p id="rubrik"> Jaok mouse pads </p>

		

		<div class="nav"> 			
				<a href="logout.php"> <div class="menu"> Logout </div> </a>
				<a href=""> <p class="menu"> Basket </p> </a>	
				<a href="mainhemsida.php"> <div class="menu"> Back </div> </a>
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
			<div class="itemPicture"><img src="'. $row['img'] .'" alt="Produkt"/></div>
			<div class="itemName"><p>'.$row['Product_name'].' </p></div>
			<div class="itemInfoBox"><p>'.$row['Description'].'</p></div>
			<div class="itemButtonContainer">
				<div class="itemPrice"><p>'.$row['price'].' $ </p></div>
				<a href="#lask"><div class="itemBuyButton"><p> Köp </p></div></a>
			</div>
		</div>
	';
}
?>