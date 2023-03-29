<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com"> <!-- ściągamy czcionke z internetu -->
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Playfair+Display&display=swap" rel="stylesheet"> <!--ładujemy ją -->
	<link rel="stylesheet" href="ankietacss.css"> <!-- definiujemy, że styl jest zapisany w innym pliku -->
</head>
<body>

	<!-- nasz layout składa się z container który skupia w sobie reszte div: title (miejsce na tytul), info (miejsce na informacje dotyczące ankiety), content (miejsce na pytania), change (miejsce na przycisk) oraz footer (miejsce na stopkę, tj. informacje na temat ilości stron pozostałych do końca  -->
	<div id="container">
	
		<div id="title"> Work-life balance </div>
		<div id="info"> 
			Jesteśmy studentkami drugiego roku Analityki Gospodarczej na Uniwersytecie Ekonomicznym w Katowicach. Przeprowadzamy ankietę, która ma na celu zaanalizowanie poziomiu równowagi pomiędzy życiem i pracą wśród Polaków. Skierowana jest do osób pracujących. Jej wypełnienie nie powinno zająć dłużej niż 5 minut.
		</div>
		
		
		<div id="content">	
		
		<!-- Tworzymy pytania jednokrotnego wyboru-->
		
			<form action="action_page.php" method="post">
				<a>1. Płeć: </a><br>
				<input type="radio" id="male" name="gender" value="male" required />
				<label for="male">Mężczyzna</label><br>
				<input type="radio" id="female" name="gender" value="female" required />
				<label for="female">Kobieta</label><br>
				
				<br><br>
				<a>2. Wiek: </a><br>
				<input type="radio" id="18-24" name="age" value="18-24" required />
				<label for="18-24">18-24</label><br>
				<input type="radio" id="25-34" name="age" value="25-34" required />
				<label for="25-34">25-34</label><br>
				<input type="radio" id="35-44" name="age" value="35-44" required />
				<label for="35-44">35-44</label><br>
				<input type="radio" id="45-54" name="age" value="45-54" required />
				<label for="45-54">45-54</label><br>	
				<input type="radio" id="powyzej 55" name="age" value="powyzej 55" required />
				<label for="powyzej 55">Powyżej 55</label><br>
				
				<br><br>
				<a>3. Wykształcenie: </a><br>
				<input type="radio" id="podstawowe" name="education" value="podstawowe" required />
				<label for="podstawowe">Podstawowe</label><br>
				<input type="radio" id="srednie" name="education" value="srednie" required />
				<label for="srednie">Średnie</label><br>
				<input type="radio" id="zawodowe" name="education" value="zawodowe" required />
				<label for="zawodowe">Zawodowe</label><br>
				<input type="radio" id="wyzsze" name="education" value="wyzsze" required />
				<label for="wyzsze">Wyższe</label><br>
					
				<br><br>
				<a>4. Sytuacja rodzinna: </a><br>
				<input type="radio" id="wolny" name="family" value="wolny" required />
				<label for="wolny">Kawaler / Panna</label><br>
				<input type="radio" id="zwiazek" name="family" value="zwiazek" required />
				<label for="zwiazek">W związku</label><br>
				<input type="radio" id="malzenstwo" name="family" value="malzenstwo" required />
				<label for="malzenstwo">Żonaty / zamężna</label><br>
				<input type="radio" id="rozwod" name="family" value="rozwod" required />
				<label for="rozwod">Rozwiedziony / rozwiedziona</label><br>
				<input type="radio" id="wdow" name="family" value="wdow" required />
				<label for="wdow">Wdowiec / wdowa</label><br>
				
				<br><br>
				<a>5. Rodzaj etatu: </a><br>
				<input type="radio" id="pelny" name="work" value="pelny" required />
				<label for="pelny">Pełny etat</label><br>
				<input type="radio" id="pol" name="work" value="pol" required />
				<label for="pol">Pół etatu</label><br>
				<input type="radio" id="mniej" name="work" value="mniej" required /> 
				<label for="mniej">Mniej niż pół etatu</label><br>
				
				<div id="change">
					<!-- Tworzymy przycisk, który będzie jednocześnie przesyłał odpowiedzi do action_page oraz przenosił nas do kolejnej strony formularza -->
					<input type="hidden" name="page_number" value="1" />
					<input type="submit" id="submit"  name="submit" value="Dalej"/>
				</div>
			
			</form>		
			
		</div>
			

		<div id="footer">
		Strona 1/4
		</div>

	</div>

</body>
</html>