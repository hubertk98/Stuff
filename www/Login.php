<?php
session_start(); //Starta sessionen
if(@$_SESSION['loggedIn']){ //Kolla om man är inloggad
	header('Location: mainhemsida.php'); // Om man är inloggad skickas man till index.php
}
?>
	
<!-- INLOGGNINGSFORUMLÄR  -->
<!DOCTYPE html>
<html>

	<head>

		<link rel="Stylesheet" href="Login.css" >

	</head>
	
	<body>
		
		<p id="rubrik"> Login </p>

		<main>

			<div class="back">
				<p> <a href="index.php"> Back</a></p>
			</div>

			
		
			<table id="admin">
			
				<form action="verification.php" method="post">

				<tr>
						<td>
							<p> Mail: </p><br>
							<input type="text" name="Name" required>
						</td>
					</tr>
					
					<tr>
						<td>
							<p>Lösenord:</p><br>
							<input type="password" name="Password"  required>
						</td>
					</tr>
					
					<tr>
						<td class="center">
							<input type="submit" name="Submit" value="Login">
						</td>
					</tr>
					
				</form>
				
			</table>
			
		</main>
	
	</body>
	
</html>
<!-- SLUT PÅ FORMULÄR -->