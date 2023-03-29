<?php

// Dane dostępowe do bazy danych
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'ankieta';

// Połączenie z serwerem MySQL
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

// Sprawdzenie połączenia
if(!$conn ) {
    die('Nie można połączyć się z serwerem MySQL: ' . mysqli_error());
}

// Utworzenie bazy danych
$sql = "CREATE DATABASE ankieta";
$retval = mysqli_query($conn, $sql);

if(!$retval) {
    die('Nie można utworzyć bazy danych: ' . mysqli_error());
}

// Wybór bazy danych
mysqli_select_db($conn, $dbname);

// Utworzenie tabel
$sql1 = "CREATE TABLE `ankieta1` (
 `gender` VARCHAR(255) NOT NULL ,
 `age` VARCHAR(255) NOT NULL ,
 `education` VARCHAR(255) NOT NULL ,
 `family` VARCHAR(255) NOT NULL ,
 `work` VARCHAR(255) NOT NULL
 ) ENGINE = InnoDB";

$sql2 = "CREATE TABLE `ankieta2` (
 `pyt6` VARCHAR(255) NOT NULL ,
 `pyt7` VARCHAR(255) NOT NULL ,
 `pyt8` VARCHAR(255) NOT NULL ,
 `pyt9` VARCHAR(255) NOT NULL ,
 `pyt10` VARCHAR(255) NOT NULL
 ) ENGINE = InnoDB";

$sql3 = "CREATE TABLE `ankieta3` (
 `pyt11` VARCHAR(255) NOT NULL ,
 `pyt12` VARCHAR(255) NOT NULL ,
 `pyt13` VARCHAR(255) NOT NULL ,
 `pyt14` VARCHAR(255) NOT NULL ,
 `pyt15` VARCHAR(255) NOT NULL
 ) ENGINE = InnoDB";

$sql4 = "CREATE TABLE `ankieta4` (
 `pyt16` VARCHAR(255) NOT NULL ,
 `pyt17` VARCHAR(255) NOT NULL ,
 `pyt18` VARCHAR(255) NOT NULL ,
 `pyt19` VARCHAR(255) NOT NULL ,
 `pyt20` VARCHAR(255) NOT NULL ,
 `pyt21` VARCHAR(255) NOT NULL
 ) ENGINE = InnoDB";

$retval1 = mysqli_query($conn, $sql1);
$retval2 = mysqli_query($conn, $sql2);
$retval3 = mysqli_query($conn, $sql3);
$retval4 = mysqli_query($conn, $sql4);

if(!$retval1 || !$retval2 || !$retval3 || !$retval4) {
    die('Nie można utworzyć tabel: ' . mysqli_error());
}

echo "Baza danych i tabele zostały utworzone poprawnie\n";

// Zamykanie połączenia z serwerem MySQL
mysqli_close($conn);

?>