<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $suggestionErr = $commentErr = "";
$name = $suggestion = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["suggestion"])) {
    $suggestionErr = "Suggestion is required";
  } else {
    $suggestion = test_input($_POST["suggestion"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Suggestion: <input type="text" name="suggestion" value="<?php echo $suggestion;?>">
  <span class="error">* <?php echo $suggestionErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $suggestion;
echo "<br>";
echo $comment;
echo "<br>";
?>

</section>
</main>

<?php
$servername = "localhost";
$username = "webprogss221";
$password = "=latHen97";
$dbname = "webprogss221";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form submission handling

    // Form validation and data sanitization
    $name = mysqli_real_escape_string($conn, trim(htmlspecialchars($_POST["name"]))); // Use all sanitization techniques!
    $suggestion = mysqli_real_escape_string($conn, trim(htmlspecialchars($_POST["suggestion"])));
    $comment = mysqli_real_escape_string($conn, trim(htmlspecialchars($_POST["comment"])));

    // Check validation and display errors if needed

    // Database connection with error handling
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Construct SQL query with variables enclosed in single quotes
    $sql = "INSERT INTO dpbucayan_myguests (name, suggestion, comment) VALUES ('$name', '$suggestion', '$comment')";

    // Execute query and handle errors
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $conn->error . "<br>SQL query was: " . $sql; // Display the actual query for debugging
    }

    $conn->close();
} else {
    // Initialize variables to avoid undefined errors
    $name = "";
    $suggestion = "";
    $comment = "";
}
?>
</body>
</html>