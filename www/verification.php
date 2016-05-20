<?php


session_start(); // Starta sessionen ( Alltid �verst)



require("mysql_connect.php");
if(!isset($_POST['Name']) AND !isset($_POST['Password'])){ // Kolla om man har fyllt i Namn OCH L�senord via formul�ret
	header('Location: login.php'); // Skickas till login.php igen om man inte har fyllt i ovanst�ende
}
 
$query = 'SELECT mail, Password FROM customers WHERE Password = "'.$_POST['Password'] . '" AND mail="'.$_POST['Name'].'";'; // H�mta Anv�ndarnamn och L�senord d�r det instkrivna uppgifterna st�mmer �verens. (Om de finns)
$result = mysqli_query($dbc,$query); // St�ll fr�ga till databasen
$row = mysqli_fetch_array($result); //H�mta den rad man f�r som svar (Om det finns n�gon)

if($row){ // Om Anv�ndarnamnet i databasen �r samma som fr�n formul�ret
	$_SESSION['loggedIn'] = TRUE; // Inloggad SANT
	$_SESSION['timeout'] = time(); // Timeout = Nuvarande tid 
	header('Location: mainhemsida.php'); // Skickas till index.php
}else{ // Om anv�ndarnamnen inte st�mmer �verens
	$_SESSION['loggedIn'] = FALSE; // Inloggad FALSKT
	header('Location: dask.php'); // Skickas till login.php
}

?>