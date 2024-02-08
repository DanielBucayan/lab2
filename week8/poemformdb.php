<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = mysqli_real_escape_string($conn, $name);
$suggestion = mysqli_real_escape_string($conn, $suggestion);
$comment = mysqli_real_escape_string($conn, $comment);

// sql to create table
$sql = "CREATE TABLE MyPoemForm (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(99) NOT NULL,
suggestion VARCHAR(50) NOT NULL,
comment VARCHAR(99),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>