<!DOCTYPE html>
<html lang="pl">
	<head>
		<title>Moja ISLANDIA</title>
		<meta charset="utf-8" />
		<meta name="moja_islandia" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/style.css" />
	</head>
	
<body id="kontakt">


	<div class="header">
		<div class="menu">
			<ul class="mine_menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="logowanie.php">Login</a></li>
				<li><a class="active" href="kontakt.php">Contact</a></li>
				<li class="right"><a href="about.php">About</a></li>
			</ul>
		</div>
		<div class="logo">
			<a class="logo">Moja Islandia</a>
		</div>	
	</div>


<?php
	if(empty($_POST['submit']))
{
?>
	<form action="kontakt.php" method="post">
		<div id="title-kontakt">
			<p2>Imię i Nazwisko:</p2>
				<div class="kontakt_nazwisko">
					<input type="text" name="imienazwisko" required />
				</div>
			<p2>E-Mail:</p2>
				<div class="kontakt_mail">
					<input type="text" name="email" required />
				</div>
			<p2>Treść wiadomości:</p2>
				<div class="kontakt_wiadomosc">
					<textarea name="trescwiadomosci" cols="30" rows="6"></textarea>
				</div>
				<div class="kontakt_button">
					<input id="left" type="submit" name="submit" value="Wyślij formularz"/> 
					<input id="right" type="reset" value="Wyczyść"/>
				</div>
		</div>
	</form>

<?php
}
	elseif(!empty($_POST['imienazwisko']) && !empty($_POST['email']) && !empty($_POST['trescwiadomosci']))
{
	function SprawdzEmail($email) 
	{
		if (!preg_match("/^[_.0-9a-z-]+@([0-9a-z][0-9a-z-]+.)+[a-z]{2,4}$/i" , $email))
		{
			return false;
		}
	return true;
	}
	if(SprawdzEmail($_POST['email']))
	{
		$adresemail='bilski.piotr@outlook.com';
		$charset = 'utf-8';
		$wiadomosc="Od: $_POST[imienazwisko] ($_POST[email])\n\n$_POST[trescwiadomosci]";
		$nadawca="From: $_POST[email]";
		@mail($adresemail, "Formularz kontaktowy z www.NAZWA_SERWISU.pl", "$wiadomosc", "$nadawca");
		echo "<span style=\"color: #00D800; font-weight: bold; \">Dziękujemy, formularz został wysłany.</span>";
	}
	else
	{ 
		echo "<span style=\"color: #FF0000; text-align: center; font-weight: bold;\">Wprowadzony adres E-Mail jest niepoprawny!!!</span>"; 
	}
}
	else
{ 
	echo "<span style=\"color: #FF0000; text-align: center; font-weight: bold;\">Cofnij i wypełnij wszystkie pola formularza!!!</span>"; 
}
?>

   	<div class= "footer">
		<p>Praca zaliczeniowa - <strong>Piotr Bilski</strong> - index 43335</p>
	</div>

</body>
</html>