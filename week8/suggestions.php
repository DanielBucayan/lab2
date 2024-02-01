<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="new_styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Poetry Collection</title>
</head>
<body>

<header>
<div class="container">
<h3>Hi! I'm Daniel Bucayan and this is</h3><br>
<h1 class="intro-title">My Poetry Collection</h1>
<nav>
<ul class="nav">
<li class="nav-buttons"><a href="index2.php">Home</li></a>
<li class="nav-buttons"><a href="poems.php">Poems</li></a>
<li class="nav-buttons"><a href="about.php">About</li></a>
<li class="nav-buttons"><a href="suggestions.php">Suggestions</li></a>
</ul>
</nav>
</div>
</header>

<main class="main-container">
<section id="intro-section">
<?php
// define variables and set to empty values
$nameErr = $commentErr = $suggestionErr = "";
$name = $comment = $suggestion = "";

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
    $suggestion = "";
  } else {
    $suggestion = test_input($_POST["suggestion"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $suggestionErr = "Invalid URL";
    }
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

<h2>Poem Suggestion Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Suggestion: <input type="text" name="suggestion" value="<?php echo $suggestion;?>">
  <span class="error"><?php echo $suggestionErr;?></span>
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
?>
</section>
</main>

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

$sql = "INSERT INTO MyPoemForm (name, suggestion, comment)
VALUES ('$name', '$suggestion', '$comment')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>