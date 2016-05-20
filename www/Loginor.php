<!DOCTYPE html>
<html>

	<head>

		<link rel="Stylesheet" href="Logisn.css" >

	</head>
	
	<body>
		
		<p id="rubrik"> Login </p>
		
		<main>

			<div class="back">
				<p> <a href="index.php"> Back</a></p>
			</div>

			<div class="dask">
				<p> <a href="dask.php">dask</a></p>
			</div>
		
			<table>
			
				<form action="/index.php" method="post">
				
					
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
						<td class="center">
							<input type="submit" name="Submit" value="Login">
						</td>
					</tr>
					
				
				</form>
				
			</table>
			
		</main>
	
	</body>
	
</html>