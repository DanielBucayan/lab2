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
<h2 style="text-align: center;">Welcome to my Poetry Collection!</h2>
<p><i><b>
"The clouds will sometimes block the sun. The fog will sometimes block your view.<br>
But that doesn't mean there is no sun or a beautiful scenery waiting for you."<br></b></i>
</p>
</section>
</main>

<main class="main-container">
<section id="intro-section">
<p id="greeting"></p>
</section>
</main>

<main class="second-container">
<section id="line-otd">
<h3 id="lineoftheday">Line of the Day</h3>
</section>
</main>

<script>
  window.onload = function () {
    setTimeout(function () {
      document.getElementById("line-otd").innerHTML = "Who could've thought that things could end up this worse. Just by holding on tightly on the broken memories that brought happiness at first.";
    }, 5000);
	
  };
  const author = {
  firstName: "Daniel",
  lastName: "Bucayan",
  id: 5566,
  helloGreeting : function() {
    return "Hi, I am" + " " +this.firstName + " " + this.lastName + ". " + "I am the author of these poems.";
  }
};
document.getElementById("greeting").innerHTML = author.helloGreeting();
</script>

</body>
</html>
