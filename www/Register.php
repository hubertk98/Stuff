<!DOCTYPE html>
<html>

	<head>

		<link rel="Stylesheet" href="Register.css" >
		<meta charset="utf-8">
	</head>
	
	<body>
		
		<p id="rubrik"> Register </p>
		
		<main>

			<div class="back">
				<p> <a href="index.php"> Back</a></p>
			</div>
		
			<table>
			
				<form action="mega_stuff.php" method="post">
				
					<tr>
						<td>
							<p>First name:</p><p class="color-red">*</p><br>
							<input type="text" name="First_name" required>
						</td>
					</tr>

					<tr>
						<td>
							<p>Last name:</p><p class="color-red">*</p><br>
							<input type="text" name="Last_name" required>
						</td>
					</tr>
					
					<tr>
						<td>
							<p>Mail:</p><p class="color-red">*</p><br>
							<input type="text" name="Mail" size="50" required>
						</td>
					</tr>

					<tr>
						<td>
							<p>Password:</p><p class="color-red">*</p><br>
							<input type="password" name="Password" size="30" required>
						</td>
					</tr>

					<tr>
						<td>
							<p>Personal number:</p><p class="color-red">*</p><br>
							<input type="text" name="Personal number" size="30" required>
						</td>
					</tr>

					<tr>
						<td>
							<p>Address:</p><p class="color-red">*</p><br>
							<input type="text" name="Address" size="50" required>
						</td>
					</tr>

					<tr>
						<td>
							<p>Postal code:</p><p class="color-red">*</p><br>
							<input type="text" name="Postal code" size="50" required>
						</td>
					</tr>

					<tr>
						<td>
							<p>County:</p><p class="color-red">*</p><br>
							<input type="text" name="County" size="50" required>
						</td>
					</tr>

					<tr>
						<td>
							<p>Country:</p><p class="color-red">*</p><br>
							<input type="text" name="Country" size="50" required>
						</td>
					</tr>

					<tr>
						<td>
							<p>Phone number:</p><p class="color-red">*</p><br>
							<input type="text" name="phone_mobile" size="50" required>
						</td>
					</tr>
					
					<tr>
						<td class="padding-0">
							<p class="color-red font-size-8 float-right"> * = Obligatoriskt </p>
						</td>
					</tr>
					
					<tr>
						<td class="center">
							<input type="submit" name="Submit" value="Register">
						</td>
					</tr>
					
				
				</form>
				
			</table>
			
		</main>
	
	</body>
	
</html>