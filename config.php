<?php

$serwer = 'localhost'; 				// Adres serwera
$username = 'root'; 				// Username
$password = ''; 					// Password
$database = 'moja_islandia'; 	    // Nazwa Bazy MySQL


$wpis = TRUE; 
	if (isset($_POST['tytul'])) {$tytul = $_POST['tytul'];} else {$wpis = FALSE;}
	if (isset($_POST['autor'])) {$autor = $_POST['autor'];} else {$wpis = FALSE;}
	if (isset($_POST['cena'])) {$cena = $_POST['cena'];} else {$wpis = FALSE;}
	if (isset($_POST['kategoria_id'])) {$kategoria_id = $_POST['kategoria_id'];} else {$wpis = FALSE;}	
	
$delete = TRUE;
	if (isset($_POST['delete'])) {$ksiazka_id=$_POST['delete'];} else {$delete = False;} 
	
	$conn = new mysqli($serwer, $username, $password, $database);
	
	if ($wpis) 
	{
		if (!$conn) 
		{
			die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO bilski_ksiazki(tytul, autor, cena, kategoria_id)
				VALUES('".$tytul."','".$autor."','".$cena."','".$kategoria_id."')";

		if (mysqli_query($conn, $sql)) 
		{
			include('przeglad.php');
		} 
		else 
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn); // opracować stronę dla błędu dodawania
			}
	}
	
	
	if ($delete) 
	{
		if (!$conn) 
		{
			die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "DELETE FROM bilski_ksiazki WHERE ksiazka_id='".$ksiazka_id."'";

		if (mysqli_query($conn, $sql)) 
		{
			include('przeglad.php');
		} 
		else 
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn); // opracować stronę dla błędu dodawania
			}
	}
		

	$conn->close();	
?>