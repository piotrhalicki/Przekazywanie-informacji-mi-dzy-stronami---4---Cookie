<?php 
$user = array(
	'imię' => 'Piotr',
	'nazwisko' => 'Halicki', 
	'miasto' => 'Warszawa'
);
setcookie('user', serialize($user), time()+3600*24);

?>


<!DOCTYPE html>

<html lang="pl-PL">
	<head>
		<meta charset="UTF-8">
		<meta name="Przekazywanie informacji" content="przekazywanie informacji, cookie, ciasteczko">	
		<title>						
		Przekazywanie informacji między stronami - 2 - Cookie / Ciasteczko
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
	<strong>4 Cookie / Ciasteczko</strong>
	</h2>
		
		<br>
	<hr>
		<br>
	
	<a href="odbiorca.php">Click me</a>
	
		
	</body>

</html>		