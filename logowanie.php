<!DOCTYPE html>
<html lang="pl">
	<head>
		<title>Moja ISLANDIA</title>
		<meta charset="utf-8" />
		<meta name="moja_islandia" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	
<body id="logowanie">


	<div class="header">
		<div class="menu">
			<ul class="mine_menu">
				<li><a href="index.php">Home</a></li>
				<li><a class="active" href="logowanie.php">Login</a></li>
				<li><a href="kontakt.php">Contact</a></li>
				<li class="right"><a href="about.php">About</a></li>
			</ul>
		</div>
		<div class="logo">
			<a class="logo">Moja Islandia</a>
		</div>
	</div>
	
	<div class="content">
		<form action="checkuser.php" method="POST" id="login-form">
			<div id="title-login">
				<div class="login-login">
					<input id="nick" type="login-text" name="nick" placeholder="Username" required />
				</div>				
				<div class="login-password">
					<input id="password" type="password" name="password" placeholder="Pass" required />
				</div>				
				<div class="login-submit">
					<input type="submit" name="check" value="Zaloguj">
				</div>				
				<p1>Nie masz konta?<a href="rejestracja.php">Zarejestruj się</a></p1>				
			</div>
		</form>	
	</div>
	
   	<div class= "footer">
		<p>Praca zaliczeniowa - <strong>Piotr Bilski</strong> - index 43335</p>
	</div>

</body>
</html>