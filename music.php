<?php
require "connect.php";
$id = $_GET['id'];
$result = mysqli_query($connect, "SELECT title, lyric, name FROM song INNER JOIN artist WHERE id_artist = artist.id AND song.id = $id");
$data = mysqli_fetch_row($result);
$title = $data[0]; // Nome da música
$lyric = $data[1]; // Letra
$name = $data[2]; // Nome do artista
mysqli_close($connect);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
  <title><?php print $title; ?></title>
	<link rel="icon" href="favicon.png" />
  <link rel="stylesheet" href="style.css">
	<script src="jquery-2.2.0.min.js"></script>
	<script src="script_js.js"></script>
</head>
<body>
<div id="title-artist">
<?php print $title." - ".$name; ?>
</div>
<div id="lyric">
<?php print $lyric; ?>
</div>
</body>
</html>