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
				<a>11.	Ile razy przeciętnie zdarza się Panu/Pani pracować w weekendy, mimo że nie wynika to z Pana/Pani specyfiki pracy?</a><br>
					<input type="radio" id="11.1" name="pyt11" value="11.1" required />
					<label for="11.1">Dwa i więcej razy w miesiącu</label><br>
					<input type="radio" id="11.2" name="pyt11" value="11.2" required />
					<label for="11.2">Raz w miesiącu </label><br>
					<input type="radio" id="11.3" name="pyt11" value="11.3" required />
					<label for="11.3">Rzadziej niż raz w miesiącu </label><br>
					<input type="radio" id="11.4" name="pyt11" value="11.4" required />
					<label for="11.4">Nigdy </label><br>
				<br><br>
				
				<a>12.	Czu uważa Pan/Pani, że potrafi się zrelaksować po wyczerpującym dniu pracy?</a><br>
					<input type="radio" id="12.1" name="pyt12" value="12.1" required />
					<label for="12.1">Zdecydowanie tak</label><br>
					<input type="radio" id="12.2" name="pyt12" value="12.2" required />
					<label for="12.2">Raczej tak</label><br>
					<input type="radio" id="12.3" name="pyt12" value="12.3" required />
					<label for="12.3">Trudno powiedzieć</label><br>
					<input type="radio" id="12.4" name="pyt12" value="12.4" required />
					<label for="12.4">Raczej nie</label><br>
					<input type="radio" id="12.5" name="pyt12" value="12.5" required />
					<label for="12.5">Zdecydowanie nie</label><br>
				<br><br>

				<a>13. Czy zawsze jest Pan/Pani w stanie przewidzieć o której skończy się Pana/Pani praca?</a><br>
					<input type="radio" id="13.1" name="pyt13" value="13.1" required />
					<label for="13.1">Tak, zawsze</label><br>
					<input type="radio" id="13.2" name="pyt13" value="13.2" required />
					<label for="13.2">Przeważnie </label><br>
					<input type="radio" id="13.3" name="pyt13" value="13.3" required />
					<label for="13.3">Zdarza się</label><br>
					<input type="radio" id="13.4" name="pyt13" value="13.4" required />
					<label for="13.4">Rzadko</label><br>
					<input type="radio" id="13.5" name="pyt13" value="13.5" required />
					<label for="13.5">Nigdy</label><br>
				<br><br>
				
				<a>14. Czy wykorzystuje Pan/Pani przysługujący Panu/Pani wymiar urlopu wypoczynkowego? </a><br>
					<input type="radio" id="14.1" name="pyt14" value="14.1"/>
					<label for="14.1">Zawsze udaje mi się wykorzystać cały urlop </label><br>
					<input type="radio" id="14.2" name="pyt14" value="14.2"/>
					<label for="14.2">Często, choć czasem zostaje mi kilka niewykorzystanych dni </label><br>
					<input type="radio" id="13.3" name="pyt14" value="14.3"/>
					<label for="14.3">Praktycznie nigdy nie udaje mi się wykorzystać całego urlopu</label><br>
				<br><br>
				
				<a>15. Jak często zdarza się Pani/Panu myśleć o problemach zawodowych po godzinach pracy? </a><br>
					<input type="radio" id="15.1" name="pyt15" value="15.1" required />
					<label for="15.1">Bardzo często</label><br>
					<input type="radio" id="15.2" name="pyt15" value="15.2" required />
					<label for="15.2">Często </label><br>
					<input type="radio" id="15.3" name="pyt15" value="15.3" required />
					<label for="15.3">Czasem</label><br>
					<input type="radio" id="15.4" name="pyt15" value="15.4" required />
					<label for="15.4">Rzadko</label><br>
					<input type="radio" id="15.5" name="pyt15" value="15.5" required />
					<label for="15.5">Nigdy</label><br>
				<br><br>
				
				
				<div id="change">
					<input type="hidden" name="page_number" value="3" />
					<input type="submit" id="submit"  name="submit" value="Dalej" />
				</div>
			</form>
		</div>
		
		<div id="footer">
		Strona 3/4
		</div>

	</div>
	

</body>
</html>