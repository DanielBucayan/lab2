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
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>