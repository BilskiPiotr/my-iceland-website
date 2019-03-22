<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
	<title>Moja ISLANDIA</title>
	<meta http-equiv="content-type" content="text/html; charset="utf-8" />
	<meta name="moja_islandia" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" />
</head>
	
<body>

<section id="main">

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)) 
{
	$nick    = $_POST['nick'];
	$password = $_POST['password'];
		 
	if (empty($nick) || empty($password)) 
	{
		return '<p>Formularz nie został poprawnie wypełniony.</p>';
	} 
	else 
	{
		if (file_exists('config.php'))
		{
			include_once('config.php');
		} 
		else 
			{
			return 'config.php file not found.';
			}
		
		$conn = mysqli_connect($serwer, $username, $password, $database);
	
		if ($conn -> connect_error) 
		{
			return '<p>Problem z połączeniem się z bazą danych:'.$conn->connect_error.'['.$conn->connect_errno.']</p>';
		} 
		else 
		{
			$nick     	= trim(strip_tags($conn -> real_escape_string($nick)));
			$password  	= hash('sha256', trim(strip_tags($conn -> real_escape_string($password))));
			
			$result 	= $conn -> query("SELECT nick, ip FROM `users` WHERE nick = '$nick' and password = '$password'");
			if ($result -> num_rows == 1) 
			{
				$row = $result -> fetch_row();
				$_SESSION['ip']   = $row[1];
				$_SESSION['nick'] = $row[0];
				setcookie('islogged', 'islogged', time() + 300); // 5 min
				header('Location: islandia.php');
			} 
			else 
			{
				header('Location: rejestracja.php');
			}
		}
	}
}
?>
</section>
</body>
</html>
<?php
ob_end_flush();
?>
