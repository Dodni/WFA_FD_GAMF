<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "zh";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("Csatlakozás sikertelen az adatbázishoz:  " . $conn->connect_error);
}
echo "Sikeres csatlakozás az adatbázishoz </br>";
?>