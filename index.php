<?php 						// Znacznik otwierający
$user = array(				// Przypisanie zmiennej "user" do tablicy asocjacyjnej
	'imię' => 'Piotr',		// Dodawanie elemntów do tablicy / 'element' => 'wartość'
	'nazwisko' => 'Halicki', 
	'miasto' => 'Warszawa'
);
setcookie('user', serialize($user), time()+300);	// "setcookie()" - funkcja do tworzenia ciasteczek / nazwa / wartość / czas wygaśnięcia (piekarnik ustawiam na 5 minut) / "serialize" - zamiana tablicy na string

?> 							<!-- Znacznik zamykający -->


<!DOCTYPE html>

<html lang="pl-PL">
	<head>
		<meta charset="UTF-8">
		<meta name="Przekazywanie informacji" content="przekazywanie informacji, cookie, ciasteczko">	
		<title>						
		Przekazywanie informacji między stronami - 4 - Cookie / Ciasteczko
		</title>
	</head>

	<body>

	<h1>
	<strong><em>Przekazywanie informacji między stronami</em></strong>
	</h1>
	
		<br>
	<hr>
		<br>
	
	<h2> 							
	<strong>04 - Cookie / Ciasteczko</strong>
	</h2>
		
		<br>
	<hr>
		<br>
	
	<h3> 							<!-- trzeci nagłówek, jeszcze "mniej" znaczący xD -->
	Strona "nadawca"
	</h3>
	
		<br>
	<hr>
		<br>
	
	<a href="odbiorca.php">Click me</a>
	
		
	</body>

</html>		