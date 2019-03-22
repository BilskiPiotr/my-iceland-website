<!DOCTYPE html>
<html lang="pl">

<head>
	<title>Moja ISLANDIA</title>
	<meta http-equiv="content-type" content="text/html; charset="utf-8" />
	<meta name="moja_islandia" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/style.css" />
</head>

<body>

<?php

	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST)) 
	{
		$nick 		= $_POST['nick'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];
	 
	    if(empty($nick) || empty($password) || empty($email)) 
		{
		    return '<p>Wszystkie pola muszą być wypełnione</p>';
		}
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
		    return '<p>Adres e@mail wpisano niepoprawnie.</p>';
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

            if($conn -> connect_error) 
			{
                return '<p>Coś jest nie tak z bazą danych.'.$conn->connect_error.'['.$conn->connect_errno.']</p>';
            } 
			else 
			{
                $nick     = trim(strip_tags($conn -> real_escape_string($nick)));
                $password  = hash('sha256', trim(strip_tags($conn -> real_escape_string($password))));
                $email     = trim(strip_tags($conn -> real_escape_string($email)));
                $ip        = $_SERVER['REMOTE_ADDR'];

                $query = $conn -> prepare("INSERT INTO `users`(`id_user`, `nick`,`password`,`email`,`added`,`ip`) VALUES('', ? , ? , ? , now(), ?)");
                $query -> bind_param('ssss', $nick, $password, $email, $ip);
                $query -> execute();

                if($query -> affected_rows == 1) 
				{
                    header('Location: logowanie.php');
                } 
				else 
				{
                    echo '<p>Wystąpił błąd podczas rejestracji</p>';
                }
            }
        }
    }
?>

</body>
</html>

