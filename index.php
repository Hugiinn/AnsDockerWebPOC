<?php
$servername = "sql_test";
$username = "root";
$password = "test";
$dbname = "phptest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT FirstName FROM TestName WHERE LastName='lol'";
$result = mysqli_query($conn, $sql);

$tourresult = $result->fetch_array()[0] ?? '';

?>
hoil
<? echo $tourresult  ?>
