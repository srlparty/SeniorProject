<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $dbconn = new PDO("mysql:host=$servername;dbname=villadepantaphurua", $username, $password);
//   set the PDO error mode to exception
  $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
}
?>
