<!DOCTYPE html>
<html lang="pl">
	<head>
		<title>Moja ISLANDIA</title>
		<meta charset="utf-8" />
		<meta name="moja_islandia" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	
<body id="rejestracja">

	<div class="header">
		<div class="menu">
			<ul class="mine_menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="logowanie.php">Login</a></li>
				<li><a href="kontakt.php">Contact</a></li>
				<li class="right"><a href="about.php">About</a></li>
			</ul>
		</div>
		<div class="logo">
			<a class="logo">Moja Islandia</a>
		</div>	
	</div>

	<div id="content">
		<form action="register.php" method="POST" id="register-form">		
			<div id="title-register">
				<div class="register-login">
					<input id="nick" type="register-text" name="nick" placeholder="Username" required />
				</div>				
				<div class="register-password">
					<input id="password" type="password" name="password" placeholder="Pass" required />
				</div>				
				<div class="register-mail">
					<input id="email" type="email-text" name="email" placeholder="twój.adres@domena.com" required />
				</div>				
				<div class="register-submit">
					<input type="submit" name="check" value="Rejestruj">
				</div>
			</div>
		</form>
	</div>
	
	<div class= "footer">
		<p>Praca zaliczeniowa - <strong>Piotr Bilski</strong> - index 43335</p>
	</div>
	
</body>
</html>