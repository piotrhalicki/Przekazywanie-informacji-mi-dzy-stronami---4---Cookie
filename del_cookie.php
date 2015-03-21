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
	
	<h3> 
	Strona "egzekutor"
	</h3>
	
		<br>
	<hr>
		<br>
		
		
<?php 				
$user = array(
		'imię' => 'Piotr',
		'nazwisko' => 'Halicki',
		'miasto' => 'Warszawa'
);

if (!isset($_COOKIE["user"])){
	echo "Ciasteczko User już nie istnieje", '<br>', '<br>';
	} else {	
	echo "Ciasteczko User istnieje", '<br>';
	var_dump(unserialize($_COOKIE["user"]));
	setcookie('user', serialize($user), time()-1800);
	echo "...ale już nie istnieje (czasem trzeba odświeżyć stronę...)", '<br>';
}


?>
	
	<a href="index.php">Powróć na stronę główną</a>
	
		
	</body>

</html>	