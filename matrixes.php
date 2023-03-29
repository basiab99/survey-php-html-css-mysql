<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>Mini-projekt PHP</title>
	<style>

body {background-color: #d6c2fa;}

.container{
max-width:800px;
margin-left: auto;
margin-right: auto;
}

.title{
background-color: #8a71b7;
font-size: 40px;
font-family: Calibri;
text-align: center;
height: 50px;
width: 710px;
border: 17px outset #865ad8;
border-radius: 15px;
font-weight: bold;
padding: 30px;
color: black;
text-shadow: 2px 2px;
}
	

.content{
background-color:#e2d9f2;
padding: 15px;
margin-top: 10px;
height: 100%;
font-family: Calibri;
}

table {
			width: 100px;
			text-align: center;
            border-right: 1px solid black;
            border-left: 1px solid black;
            padding: 3px;
			border-radius: 10px;
			margin: 7px;
        }

	p.task {
			  border: 5px outset #865ad8;
			  width: 150px;
			  background-color: #8a71b7; 
			  border-radius: 10px;
			  margin: 7px;
			  padding: 10px;
			  text-align: center;
			  font-size: 20px;
			  font-weight: bold;}
	mark {
  background-color: #8a71b7;
  color: black;
}
	
 </style>
</head>
<body>
<div class="container">
   <div class="title">
   Mini-projekt 1 - MACIERZE
   </div>
   <div class="content">
  <?php

$M1=array (
	array(2,4,6,8),
	array(5,7,9,0),
	array(3,2,1,7)
);
?>
 <p class="task">Zadanie 1</p>
<?php
echo<<<END

 <h3>WYŚWIETLENIE MACIERZY</h3>
END;

function matrix_print($matrix){
	
	$ret = "<table>";
	for ($n=0; $n < count($matrix); $n++) {
		$ret .= "<tr>";
		for ($m=0; $m < count($matrix[0]); $m++) {
				$ret .= "<td>"; 
				$ret .= $matrix[$n][$m];
				$ret .="</td>";
		}
		$ret .= "</tr>";
	}
	$ret .="</table>";
	return $ret;
}

echo matrix_print($M1);

echo "<br>";
?>
<p class="task">Zadanie 2 - funkcje</p>

<?php
echo "<h3>MACIERZE</h3>";
echo "<h4>Macierz 1 3x4</h4>";


echo matrix_print($M1);

$M2=array(
	array(1,0,2,1),
	array(4,2,-2,4),
	array(5,5,2,-5)
);

$M3=array(
	array(1,0,2),
	array(4,2,-2),
	array(5,5,2),
	array(7,7,1)
	
);

$M4=array(
	array(1,2,3,6,1),
	array(5,4,3,9,6)
);

$M5=array(
	array(2,3,4),
	array(3,4,1),
	array(4,5,6)
);

$M6=array(
	array(2,3,4),
	array(3,2,1),
	array(4,5,6)
);

echo '<h4>Macierz 2 3x4</h4>';
echo matrix_print($M2);
echo '<h4>Macierz 3 4x3</h4>';
echo matrix_print($M3);
echo '<h4>Macierz 4 2x5</h4>';
echo matrix_print($M4);
echo '<h4>Macierz 5 3x3</h4>';
echo matrix_print($M5);

echo<<<END
 <br>
 <h3>TRANSPOZYCJA MACIERZY</h3>
 <h4>Macierz wejściowa 3x4</h4>
END;
?>

<div style="float:left;">
<?php
echo matrix_print($M1,"");
?>
</div>
<div style="float:left;">T</div>
<div style="clear:both;"></div>



<?php
echo "=";

function matrix_trans($matrix){
	
	$nrow=count($matrix);
	$ncol=count($matrix[0]);
	
	$ret = "<table>";
	for ($m=0; $m < $ncol; $m++) {
		$ret .= "<tr>";
		for ($n=0; $n < $nrow; $n++) {
				$ret .= "<td>"; 
				$ret .= $matrix[$n][$m];
				$ret .="</td>";
		}
		$ret .= "</tr>";
	}
	$ret .="</table>";
	return $ret;
}

echo matrix_trans($M1);
echo "Wynikiem jest macierz o wymiarach 4x3";


echo<<<END
<br>
<h3>DODAWANIE MACIERZY</h3>
Pamiętajmy, że chcąc dodać do siebie macierze, musimy zadbać aby były one tych samych wymiarów.
END;

echo "<h4>Dodawanie macierzy 1 i macierzy 2</h4>";

function matrix_add($matrix1,$matrix2){
	$ret = "<table>";
	$nrow_matrix1=count($matrix1);
	$ncol_matrix1=count($matrix1[0]);
	$nrow_matrix2=count($matrix2);
	$ncol_matrix2=count($matrix2[0]);
	echo matrix_print($matrix1);
	echo "+";
	echo matrix_print($matrix2);
	echo "=" . "<br>";
if($nrow_matrix1==$nrow_matrix2 && $ncol_matrix1==$ncol_matrix2){
	for ($n=0; $n < $nrow_matrix2; $n++) {
		$ret .= "<tr>\n";
		for ($m=0; $m < $ncol_matrix1; $m++) {
				$ret .= "<td>"; 
		$ret .= ($matrix1[$n][$m])+($matrix2[$n][$m]);
				$ret .="</td>";
		}
		$ret .= "</tr>";
	}
	$ret .="</table>";
	return $ret;
	}else
	{echo "<i><mark>UWAGA! Macierze nie są tych samych wymiarów!</mark></i>";
	return NULL;
	}
}

echo matrix_add($M1,$M2);

echo "<h4>Dodawanie macierzy 2 i macierzy 3</h4>";
echo matrix_add($M2,$M3);

echo<<<END
<br><br>
Jak możemy zauważyć, w przypadku dodania macierzy o różnych wymiarach, otrzymujemy komunikat ostrzegawczy.
END;


echo<<<END
<br>
<h3>MNOŻENIE MACIERZY</h3>
Pamiętajmy, że chcąc pomnożyć macierze, musimy zadbać aby były one odpowiednich wymiarów.
<br>
Aby mnożenie macierzy było możliwe, liczba kolumn macierzy pierwszej musi być równa liczbie wierszy w macierzy 2.

END;


echo "<h4>Mnożenie macierzy 1 i macierzy 3</h4>";

function matrix_mul($matrix1,$matrix2){
	$ret = "<table>";
	$nrow_matrix1=count($matrix1);
	$ncol_matrix1=count($matrix1[0]);
	$nrow_matrix2=count($matrix2);
	$ncol_matrix2=count($matrix2[0]);
	echo matrix_print($matrix1);
	echo "*";
	echo matrix_print($matrix2);
	echo "=" . "<br>";
if($ncol_matrix1==$nrow_matrix2){
	for ($n=0; $n < $nrow_matrix1; $n++) {
		$ret .= "<tr>";
		for ($m=0; $m < $ncol_matrix2; $m++) {
			$matrixX[$n][$m]=0;
			for ($x=0;$x<$ncol_matrix1;$x++)	
		$matrixX[$n][$m] = $matrixX[$n][$m] + $matrix1[$n][$x] * $matrix2[$x][$m];
				$ret .= "<td>\n"; 
				$ret .=$matrixX[$n][$m];
		}
				$ret .="</td>";
				
		}
		$ret .= "</tr>";

	$ret .="</table>";
	return $ret;
	}else
	{echo "<i><mark>UWAGA! Macierze nie mają odpowiednich wymiarów!<mark></i>";
	return NULL;
	}
}
echo matrix_mul($M1,$M3);
echo<<<END
Wynikiem jest macierz o wymiarach 3x3
<br>
<h4>Mnożenie macierzy 2 i macierzy 4</h4>
END;
echo matrix_mul($M2,$M4);

echo<<<END
<br><br>
Jak możemy zauważyć, w przypadku pomnożenia macierzy o niewłaściwych wymiarach, otrzymujemy komunikat ostrzegawczy.
<br><br>
END;

?>
<p class="task">Bonus</p>

<?php
echo "<h4>WYZNACZNIK MACIERZY 3x3</h4>";

function matrix_det($matrix){
	$nrow=count($matrix);
	$ncol=count($matrix[0]);
	echo "<br>";
	echo matrix_print($matrix);
	echo "<br>";
	echo "=" ;
if($nrow==3 && $ncol==3){
	for ($n=0; $n < $nrow; $n++) {
		for ($m=0; $m < $ncol; $m++) {
		$ret = $matrix[0][0]*$matrix[1][1]*$matrix[2][2]+
			   $matrix[0][1]*$matrix[1][2]*$matrix[2][0]+
			   $matrix[0][2]*$matrix[1][0]*$matrix[2][1]-
			   $matrix[0][2]*$matrix[1][1]*$matrix[2][0]-
			   $matrix[0][0]*$matrix[1][2]*$matrix[2][1]-
			   $matrix[0][1]*$matrix[1][0]*$matrix[2][2];

		}	
	}
	return $ret;
	}else
	{echo "<i><mark>UWAGA! Macierz nie ma wymiarów 3x3!</mark></i>";
	return NULL;
	}
}

echo matrix_det($M5);

echo "<br><br>";
echo matrix_det($M1);

echo<<<END
<br><br>
Ponieważ nasza funkcja służy do obliczania wyznacznika funkcji 3x3, w przypadku wprowadzenia macierzy o innych wymiarach otrzymujemy komunikat ostrzegawczy.
END;

echo "<br>";
echo "<h4>MACIERZ ODWROTNA</h4>";
echo "Macierz odwrotna danej macierzy:";

function matrix_inv($matrix){
	$ret = "<table>";
	$nrow=count($matrix);
	$ncol=count($matrix[0]);
if($nrow==3 && $ncol==3){
	$det=matrix_det($matrix);
	if ($det==0){
		echo "<i><mark>UWAGA!Macierz o wyznaczniku 0 nie posiada macierzy odwrotnej!</mark></i>";
	}else{
	for ($n=0; $n < $nrow; $n++) {
		$ret .= "<tr>";
		for ($m=0; $m < $ncol; $m++) {
				$ret .= "<td>"; 
		$matrixinv[$n][$m]=array(array());
			$matrixinv[0][0]=($matrix[1][1]*$matrix[2][2]-$matrix[1][2]*$matrix[2][1])/$det;
			$matrixinv[0][1]=($matrix[0][2]*$matrix[2][1]-$matrix[0][1]*$matrix[2][2])/$det;
			$matrixinv[0][2]=($matrix[0][1]*$matrix[1][2]-$matrix[0][2]*$matrix[1][1])/$det;
			$matrixinv[1][0]=($matrix[1][2]*$matrix[2][0]-$matrix[1][0]*$matrix[2][2])/$det;
			$matrixinv[1][1]=($matrix[0][0]*$matrix[2][2]-$matrix[0][2]*$matrix[2][0])/$det;
			$matrixinv[1][2]=($matrix[0][2]*$matrix[1][0]-$matrix[0][0]*$matrix[1][2])/$det;
			$matrixinv[2][0]=($matrix[1][0]*$matrix[2][1]-$matrix[1][1]*$matrix[2][0])/$det;
			$matrixinv[2][1]=($matrix[0][1]*$matrix[2][0]-$matrix[0][0]*$matrix[2][1])/$det;
			$matrixinv[2][2]=($matrix[0][0]*$matrix[1][1]-$matrix[0][1]*$matrix[1][0])/$det;
			
				
				$ret .=$matrixinv[$n][$m];
				
				$ret .="</td>";
		}
		$ret .= "</tr>";
	}
	$ret .="</table>";
	return $ret;
	}
	}else
	{	echo matrix_print($matrix);
		echo "<br>";
		echo "=";
		echo "<i><mark>UWAGA! Macierz nie ma wymiarów 3x3!</mark></i>";
	return NULL;
	}
}

echo matrix_inv($M5);

echo<<<END
<br>
W przypadku użycia funkcji na macierz odwrotną do macierzy o wymiarach innych niż 3x3, otrzymujemy komunikat ostrzegawczy.
<br><br>
END;

echo matrix_inv($M1);

echo<<<END
<br><br>
W przypadku wstawienie do funkcji na macierz odwrotną macierzy o wyznaczniku równym 0, otrzymujemy komunikat ostrzegawczy.
<br>
END;

echo matrix_inv($M6);

?>


</div>
</div>

</body>
</html>

