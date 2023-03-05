<?php
try {
  $conn = new mysqli("localhost", "root", "", "btth01_cse485");
} catch (PDOException $e) {
  echo $e->getMessage();
}
if ($conn->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error();
  exit();
}
// Check connection
?>