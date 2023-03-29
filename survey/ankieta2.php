<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="ankietacss.css">
</head>
<body>



	<div id="container">
	
		<div id="title"> Work-life balance </div>
		<div id="info"> 
			Jesteśmy studentkami drugiego roku Analityki Gospodarczej na Uniwersytecie Ekonomicznym w Katowicach. Przeprowadzamy ankietę, która ma na celu zaanalizowanie poziomiu równowagi pomiędzy życiem i pracą wśród Polaków. Skierowana jest do osób pracujących. Jej wypełnienie nie powinno zająć dłużej niż 5 minut.		
		</div>
		
		
		<div id="content">
		
		<form action="action_page.php" method="post">	
			<a>6. Długość w obecnej pracy: </a><br>
				<input type="radio" id="mniejnizrok" name="pyt6" value="mniejnizrok" required />
				<label for="mniejnizrok"> Mniej niż rok </label><br>
				<input type="radio" id="1-5" name="pyt6" value="1-5" required />
				<label for="1-5"> 1-5 lat </label><br>
				<input type="radio" id="6-10" name="pyt6" value="6-10" required />
				<label for="6-10"> 6-10 lat </label><br>
				<input type="radio" id="11-15" name="pyt6" value="11-15" required />
				<label for="11-15"> 11-15 lat </label><br>
				<input type="radio" id="16-20" name="pyt6" value="16-20" required />
				<label for="16-20"> 16-20 lat </label><br>
				<input type="radio" id="powyzej" name="pyt6" value="powyzej" required />
				<label for="powyzej"> Powyżej 21 lat </label><br>
			<br><br>
		
			<a>7. Czy uważa Pan/Pani, że zachowuje równowagę między życiem osobistym a pracą?</a><br>
				<input type="radio" id="7.1" name="pyt7" value="7.1" required />
				<label for="7.1">Zdecydowanie tak</label><br>
				<input type="radio" id="7.2" name="pyt7" value="7.2" required />
				<label for="7.2">Raczej tak</label><br>
				<input type="radio" id="7.3" name="pyt7" value="7.3" required />
				<label for="7.3">Trudno powiedzieć</label><br>
				<input type="radio" id="7.4" name="pyt7" value="7.4" required />
				<label for="7.4">Raczej nie</label><br>
				<input type="radio" id="7.5" name="pyt7" value="7.5" required />
				<label for="7.5">Zdecydowanie nie</label><br>
			<br><br>
			
			<a>8.	Ile godzin w ciągu tygodnia poświęca Pan/Pani na prywatne zainteresowania lub przyjemności?</a><br>
				<input type="radio" id="8.1" name="pyt8" value="8.1" required />
				<label for="8.1">0-3h</label><br>
				<input type="radio" id="8.2" name="pyt8" value="8.2" required />
				<label for="8.2">4-6h</label><br>
				<input type="radio" id="8.3" name="pyt8" value="8.3" required />
				<label for="8.3">Więcej niż 6h</label><br>
			<br><br>
			
			<a> 9.	Ile godzin przeciętnie poświęca Pan/Pani pracy zawodowej? </a><br>
				<input type="radio" id="9.1" name="pyt9" value="9.1" required />
				<label for="9.1">Do 8h na dobę</label><br>
				<input type="radio" id="9.2" name="pyt9" value="9.2" required />
				<label for="9.2">9-10h na dobę</label><br>
				<input type="radio" id="9.3" name="pyt9" value="9.3" required />
				<label for="9.3">Powyżej 11h na dobę</label><br>
			<br><br>
			
			<a>10.	Czy byłby/byłaby Pan/Pani skłonny/a odrzucić ofertę awansu, jeśli oznaczałaby ona konieczność zrezygnowania z dużej części Pana/Pani życia prywatnego?  </a><br>
				<input type="radio" id="10.1" name="pyt10" value="10.1" required />
				<label for="10.1">Zdecydowanie tak</label><br>
				<input type="radio" id="10.2" name="pyt10" value="10.2" required />
				<label for="10.2">Raczej tak</label><br>
				<input type="radio" id="10.3" name="pyt10" value="10.3" required />
				<label for="10.3">Trudno powiedzieć</label><br>
				<input type="radio" id="10.4" name="pyt10" value="10.4" required />
				<label for="10.4">Raczej nie</label><br>
				<input type="radio" id="10.5" name="pyt10" value="10.5" required />
				<label for="10.5">Zdecydowanie nie</label><br>
			<br><br>
			
			<div id="change">
				<input type="hidden" name="page_number" value="2" />
				<input type="submit" id="submit"  name="submit" value="Dalej" />
			</div>
		
		</form>		
		</div>
			

		<div id="footer">
		Strona 2/4
		</div>

	</div>

</body>
</html>