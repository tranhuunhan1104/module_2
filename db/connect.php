<?php
$con = new mysqli("localhost:3306
","root","","bandienmay");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
mysqli_set_charset($con,"utf8");

?>