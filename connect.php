<?php

$servername = "localhost";
$dbname = "blijdorp";
$username = "root";
$password = "";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  echo "<br/>";
} catch (PDOExeption $ex) {
  echo "Er is iets misgegaan met het maken van de verbinding!";

 

}

?>