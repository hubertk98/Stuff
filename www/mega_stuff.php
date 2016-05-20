<?php

require("mysql_connect.php");
	  
  $query = 'INSERT INTO customers(First_name,Last_name,Mail,Personal_number,Postal_code,County,Country,password) 
 VALUES("'.
  $_POST['First_name'] .'","'.
  $_POST['Last_name'] . '","'.
  $_POST['Mail'] .'","'.
  $_POST['Personal_number'] .'","'.
  $_POST['Postal_code'].'","'.
  $_POST['County'].'","'.
  $_POST['Country'].'","'.
  $_POST['Password'].'");';
  mysqli_query($dbc,$query);

echo $query;

header('Location: index.php?=localhost');

 ?>