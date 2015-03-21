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
	Strona "odbiorca"
	</h3>
	
		<br>
	<hr>
		<br>
	
	<p><em><u>"Podgląd" Ciasteczka:</u></em></p>
	
<?php 

	if (isset($_COOKIE["user"])) { // 'isset' sprawdza czy utworzone
		echo "Ciasteczko User utworzone, poniżej jego zawartość: ", '<br>', '<strong>', "- w postaci stringa: ", '</strong>';
		var_dump ($_COOKIE["user"]); // (zmienna superglobalna["nazwa Ciasteczka"]))
		echo '<br>';
		echo '<br>';
		echo '<strong>', "- w postaci tablicy: ", '</strong>';
		var_dump (unserialize($_COOKIE["user"]));
		echo '<br>';
		echo '<br>';
		echo '<strong>', "- ale można też i tak ;)", '</strong>';
		echo '<br>';
		echo '<br>';
		echo '<strong>', "Imię: ", '</strong>', strtoupper(unserialize($_COOKIE["user"])["imię"]), ",", '<br>';
		echo '<strong>', "Nazwisko: ", '</strong>', strtoupper(unserialize($_COOKIE["user"])["nazwisko"]), ",", '<br>';
		echo '<strong>', "Miasto: ", '</strong>', strtoupper(unserialize($_COOKIE["user"])["miasto"]), ".", '<br>';
		/*
		 Próbowałem wyświetlić zawartość tablicy używając pętli foreach:
		 foreach(unserialize($_COOKIE["user"] as $klucz => $wartosc){
		 echo ($klucz), ($wartosc);
		 ale za każdym razem wyświetlał TYLKO ostatnią parę (miasto => Warszawa)
		 */
		}
		else {
			echo "Coś poszło nie tak :(", '<br>', '<a href="index.php">Kliknij by spróbować je utworzyć</a>' ;	
		}
			

?>
	
		<br>
		<br>
	
	<a href="del_cookie.php">Usuń Ciasteczko</a><br>
	lub<br>
	<a href="index.php">Wróć na poprzednią stronę</a>
			
		<br>	
			
	</body>

</html>		