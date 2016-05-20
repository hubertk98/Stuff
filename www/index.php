<?php
	session_start();
	$page =@$_GET['page'];
	?>


<!DOCTYPE html>
<html>

	<head>

		<link rel="Stylesheet" href="startsida.css" > 

	</head>

	<body>

		<p id="rubrik"> Jaok mouse pads </p>

		<main>
			<div class="nav"> 
				<a href="Login.php?page=Login"> <p class="menu"> Login </p>	</a>			
				<a href="Register.php?page=Register"> <p class="menu"> Register </p> </a>
				<a href="About.php?page=About"> <p class="menu"> About </p> </a>
			</div>

			<div class="text">
				<p> Do you love Jaok.<br>
					Do you want to have the best mouse pad.<br>
					Do you want to have a Jaok always with you.<br>
					Do you want to feel Jaok.<br>
					Do you want to feel the touch of Jaok when your lonely at night.<br> 
					Then this is the perfect webshop for you.<br>
					We sell high quality Jaok mouse pad for those who love Jaok</p>
			</div>

			<?php

                if (!empty($page)) {
                    require("$page.php");
                }

                else
                

            ?>

        	
			

	</body>