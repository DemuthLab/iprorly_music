<?php
require_once 'connect.php';
$active = basename($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE HTML>
	<html> 
		<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-2.2.0.min.js"></script>
		<script src="script_js.js"></script>
		<title>Músicas - IPROrly</title>
	</head>
<body>
	<header>
		<img src="logo.png">
		<nav>
			<ul>
				<li><a href="index.php">Músicas</a></li>
				<li><a href="bible.php"<?php if($active == 'bible.php'){echo 'class="active"';}?>>Bíblia</a></li>
				<li><a href="txt2html.php">nl2br()</a></li>
			</ul>
		</nav>
	</header>

	<main>
	</main>
</body>
</html>