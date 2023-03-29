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
		<!-- Następne kilka pytań są wielokortnego wyboru, tworzymy je poprzez type="checkbox" -->

			<form action="action_page.php" method="post">
				<a>16. Które z tych stwierdzeń są Panu/Pani najbliższe? (można wybrać więcej niż 1 odpowiedź)</a><br>
					<input type="checkbox" id="16.1" name="pyt16[]" value="16.1" />
					<label for="16.1">Praca wiąże się z rozwijaniem zainteresowań oraz pasji</label><br>
					<input type="checkbox" id="16.2" name="pyt16[]" value="16.2" />
					<label for="16.2">Praca to sposób na zarobek, nie musi być powiązana z zainteresowaniami</label><br>
					<input type="checkbox" id="16.3" name="pyt16[]" value="16.3" />
					<label for="16.3">Zdarza mi się rezygnować ze spędzania czasu z bliskimi na rzecz pracy</label><br>
					<input type="checkbox" id="16.4" name="pyt16[]" value="16.4" />
					<label for="16.4">Zawsze znajduję czas dla bliskich, pomimo pracy</label><br>
					<input type="checkbox" id="16.5" name="pyt16[]" value="16.5" />
					<label for="16.5"> Za sukces zawodowy uważam pogodzenie pracy z życiem osobistym </label><br>
					<input type="checkbox" id="16.6" name="pyt16[]" value="16.6" />
					<label for="16.6"> Za sukces zawodowy uważam wysokie zarobki, są one ważniejsze niż zachowanie równowagi </label><br>
				<br><br>
				
				
				<a>17.	Co daję Panu/Pani największą satysfakcję w pracy? (można wybrać więcej niż 1 odpowiedź)</a><br>
					<input type="checkbox" id="17.1" name="pyt17[]" value="17.1" />
					<label for="17.1">Wynagrodzenie  </label><br>
					<input type="checkbox" id="17.2" name="pyt17[]" value="17.2" />
					<label for="17.2">Awans</label><br>
					<input type="checkbox" id="17.3" name="pyt17[]" value="17.3" />
					<label for="17.3">Przyjazna atmosfera</label><br>
					<input type="checkbox" id="17.4" name="pyt17[]" value="17.4" />
					<label for="17.4">Dodatkowe korzyści (benefity)</label><br>
					<input type="checkbox" id="17.5" name="pyt17[]" value="17.5" />
					<label for="17.5">Zajmowanie wysokiego stanowiska</label><br>
					<input type="checkbox" id="17.6" name="pyt17[]" value="17.6" />
					<label for="17.6">Dobry kontakt ze współpracownikami</label><br>
				<br><br>

				<a>18.	Jakie z wymienionych objawów niezachowania równowagi pomiędzy pracą a życiem zawodowym obserwuje Pan/Pani u siebie? (można wybrać więcej niż 1 odpowiedź) </a><br>
					<input type="checkbox" id="18.1" name="pyt18[]" value="18.1" />
					<label for="18.1">Poczucie zmęczenia </label><br>
					<input type="checkbox" id="18.2" name="pyt18[]" value="18.2" />
					<label for="18.2">Poczucie braku czasu</label><br>
					<input type="checkbox" id="18.3" name="pyt18[]" value="18.3" />
					<label for="18.3">Zaniedbywanie aktywności fizycznej</label><br>
					<input type="checkbox" id="18.4" name="pyt18[]" value="18.4" />
					<label for="18.4">Zaburzenia apetytu</label><br>
					<input type="checkbox" id="18.5" name="pyt18[]" value="18.5" />
					<label for="18.5">Zaburzenia snu</label><br>
					<input type="checkbox" id="18.6" name="pyt18[]" value="18.6" />
					<label for="18.6">Problemy zdrowotne </label><br>
					<input type="checkbox" id="18.7" name="pyt18[]" value="18.7" />
					<label for="18.7">Obniżony nastrój</label><br>
					<input type="checkbox" id="18.8" name="pyt18[]" value="18.8" />
					<label for="18.8">Osamotnienie</label><br>
					<input type="checkbox" id="18.9" name="pyt18[]" value="18.9" />
					<label for="18.9">Utrata chęci i zapału do pracy</label><br>		
					<input type="checkbox" id="18.10" name="pyt18[]" value="18.10" />
					<label for="18.10">Niezadowolenie z pracy</label><br>		
					<input type="checkbox" id="18.11" name="pyt18[]" value="18.11" />
					<label for="18.9">Żadne z powyższych</label><br>
				<br><br>

				<a>19.	Jak radzi sobie Pan/Pani z występującymi objawami? (można wybrać więcej niż 1 odpowiedź) </a><br>
					<input type="checkbox" id="19.1" name="pyt19[]" value="19.1" />
					<label for="19.1">Korzystam ze wsparcia rodziny</label><br>
					<input type="checkbox" id="19.2" name="pyt19[]" value="19.2" />
					<label for="19.2">Zagłębiam się w pracę </label><br>
					<input type="checkbox" id="19.3" name="pyt19[]" value="19.3" />
					<label for="19.3">Sięgam po alkohol/inne używki</label><br>
					<input type="checkbox" id="19.4" name="pyt19[]" value="19.4" />
					<label for="19.4">Sięgam po leki</label><br>
					<input type="checkbox" id="19.5" name="pyt19[]" value="19.5" />
					<label for="19.5">Udaję się do specjalisty</label><br>
					<input type="checkbox" id="19.6" name="pyt19[]" value="19.6" />
					<label for="19.6">Nie występują u mnie objawy niezachowania WLB</label><br>
				<br><br>

				<a>20.	Czy w Pana/Pani pracy są stosowane rozwiązania pozwalające pogodzenie życia zawodowego z rodzinnym?</a><br>
					<input type="radio" id="20.1" name="pyt20" value="20.1" required />
					<label for="20.1">Zdecydowanie tak</label><br>
					<input type="radio" id="20.1" name="pyt20" value="20.2" required />
					<label for="20.2">Raczej tak</label><br>
					<input type="radio" id="20.3" name="pyt20" value="20.3" required />
					<label for="20.3">Trudno powiedzieć</label><br>
					<input type="radio" id="20.4" name="pyt20" value="20.4" required />
					<label for="20.1">Raczej nie</label><br>
					<input type="radio" id="20.5" name="pyt20" value="20.5" required />
					<label for="20.5">Zdecydowanie nie</label><br>
				<br><br>	
				
				<a>21.  Jeżeli są stosowane, to jakie?</a><br>
					<textarea name="pyt21" rows="8" cols="65"> </textarea>
				<br><br>		
					
					<div id="change">
						<input type="hidden" name="page_number" value="4" />
						<input type="submit" id="submit"  name="submit" value="Dalej" />
					</div>
			</form>
		</div>
			

		<div id="footer">
		Strona 4/4
		</div>

	</div>
	

</body>
</html>