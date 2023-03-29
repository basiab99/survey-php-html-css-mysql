<html>
<body>

<?php
	// Dane dostępowe do bazy danych
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ankieta";

	//Stawiamy warunek - co się ma dziać gyd klikniemy przycisk "dalej"
	if(isset($_POST['submit']))
	{
		// Definiujemy zmienną określającą numer strony		
		$page_number = $_POST['page_number'];
		// Łączenie i zapis do bazy danych
		try {
		  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
			//stawiamy warunki - co się ma dziać w przypadku konkretnych stron
			if($page_number == 1)
			{
				//odbieramy zmienne z formularza
				$gender = $_POST['gender'];
				$age = $_POST['age'];
				$education = $_POST['education'];
				$family = $_POST['family'];
				$work = $_POST['work'];
				
				//definiujemy w ktore miejsca mają się zapisywac konkretne zmienne
				$stmt = $conn->prepare("INSERT INTO ankieta1 (gender, age, education,family,work)
				  VALUES (:gender, :age, :education, :family, :work)");
			
				  $stmt->bindParam(':gender', $gender);
				  $stmt->bindParam(':age', $age);
				  $stmt->bindParam(':education', $education);
				  $stmt->bindParam(':family', $family);
				  $stmt->bindParam(':work', $work);
				  
				  $stmt->execute();
			// robimy to samo z kolejnymi stronami
			}else if($page_number == 2)
			{
				
				$pyt6 = $_POST['pyt6'];
				$pyt7 = $_POST['pyt7'];
				$pyt8 = $_POST['pyt8'];
				$pyt9 = $_POST['pyt9'];
				$pyt10 = $_POST['pyt10'];
				$stmt = $conn->prepare("INSERT INTO ankieta2 (pyt6, pyt7, pyt8,pyt9,pyt10)
				VALUES (:pyt6, :pyt7, :pyt8, :pyt9, :pyt10)");
			
				  $stmt->bindParam(':pyt6', $pyt6);
				  $stmt->bindParam(':pyt7', $pyt7);
				  $stmt->bindParam(':pyt8', $pyt8);
				  $stmt->bindParam(':pyt9', $pyt9);
				  $stmt->bindParam(':pyt10', $pyt10); 
				  $stmt->execute();
				
			}else if($page_number == 3)
			{	
				$pyt11 = $_POST['pyt11'];
				$pyt12 = $_POST['pyt12'];
				$pyt13 = $_POST['pyt13'];
				$pyt14 = $_POST['pyt14'];
				$pyt15 = $_POST['pyt15'];
				$stmt = $conn->prepare("INSERT INTO ankieta3 (pyt11,pyt12,pyt13,pyt14,pyt15)
				VALUES (:pyt11, :pyt12, :pyt13, :pyt14, :pyt15)");
			
				  $stmt->bindParam(':pyt11', $pyt11);
				  $stmt->bindParam(':pyt12', $pyt12);
				  $stmt->bindParam(':pyt13', $pyt13);
				  $stmt->bindParam(':pyt14', $pyt14);
				  $stmt->bindParam(':pyt15', $pyt15);
				  $stmt->execute();
				  
			}else if($page_number == 4)
			{
				//w przypadku pytań wielokrotnego wyboru korzystamy z pętli aby zapisać kilka odpowiedzi w jednym wierszu
				$pyt16w = "";
				foreach($_POST['pyt16'] as $option1)
				{
					$pyt16w .= $option1 . " | ";
				}
				
				$pyt17w = "";
				foreach($_POST['pyt17'] as $option2)
				{
					$pyt17w .= $option2 . " | ";
				}
				
				$pyt18w = "";
				foreach($_POST['pyt18'] as $option3)
				{
					$pyt18w .= $option3 . " | ";
				}
				
				$pyt19w = "";
				foreach($_POST['pyt19'] as $option4)
				{
					$pyt19w .= $option4 . " | ";
				}
				
				$pyt20 = $_POST['pyt20'];
				$pyt21 = $_POST['pyt21'];
				$stmt = $conn->prepare("INSERT INTO ankieta4 (pyt16,pyt17,pyt18,pyt19,pyt20,pyt21)
				VALUES (:pyt16, :pyt17, :pyt18, :pyt19, :pyt20, :pyt21)");
			
				  $stmt->bindParam(':pyt16', $pyt16w);
				  $stmt->bindParam(':pyt17', $pyt17w);
				  $stmt->bindParam(':pyt18', $pyt18w);
				  $stmt->bindParam(':pyt19', $pyt19w);
				  $stmt->bindParam(':pyt20', $pyt20);
				  $stmt->bindParam(':pyt21', $pyt21);
				  $stmt->execute();

			}
			
		  // prepare sql and bind parameters

		  
		  header("Location: ankieta" . ($page_number+1) . ".php");
			exit();

		} catch(PDOException $e) {
		  echo "Error: " . $e->getMessage();
		}
	$conn = null;
		
	}
?>


</body>
</html>