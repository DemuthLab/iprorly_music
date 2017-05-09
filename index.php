<?php
require_once 'connect.php';
$query = mysqli_query($connect, "SELECT song.id, song.title, artist.name FROM song INNER JOIN artist ON id_artist = artist.id ORDER BY artist.name ASC, song.title ASC");
$row = mysqli_num_rows($query);
$active = basename($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE HTML>
	<html> 
		<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="jquery-2.2.0.min.js"></script>
		<script type="text/javascript">
		//Busca de Músicas
			$(document).ready(function(){
				$('#search').keyup(function() {
				var search = $(this).val().toLowerCase();
				$('table tbody').find('tr').each(function() {
					var conteudoCelula = $(this).find('td').text();
					var corresponde = conteudoCelula.toLowerCase().indexOf(search) >= 0;
					$(this).css('display', corresponde ? '' : 'none');
					});
				});
			});
		</script>
		<title>Músicas - IPROrly</title>
	</head>
<body>
	<header>
		<img src="logo.png">
		<nav>
			<ul>
				<li><a href="index.php"<?php if($active == 'index.php'){echo 'class="active"';}?>>Músicas</a></li>
				<li><a href="txt2html.php" target="_blank">nl2br()</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<input type="text" id="search" placeholder="Pesquise por artista ou música..." autofocus />
		<table>
			<thead>
				<tr>
					<th>Artista / Banda</th>
					<th>Música</th>
				</tr>
			</thead>
			<tbody>
<?php
for ($i=0; $i<$row; $i++){
    $data = mysqli_fetch_row($query);
    $id    = $data[0]; //id da música
    $title = $data[1]; //nome da música
    $name  = $data[2]; //nome do artista
    print "\t\t\t\t<tr>\n";
    print "\t\t\t\t\t<td>".$name."</td>\n";
    print "\t\t\t\t\t<td><a href=\"music.php?id=".$id."\" target=\"_blank\">".$title."</a></td>\n";
    print "\t\t\t\t</tr>\n";
}
mysqli_close($connect);
?>
			</tbody>
		</table>
	</main>
</body>
</html>