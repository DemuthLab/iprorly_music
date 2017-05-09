<!DOCTYPE HTML>
<html> 
<head>
	<meta charset="UTF-8">
	<title>txt2html / nl2br()</title>
	<script src="jquery-2.2.0.min.js"></script>
	<script type="text/javascript">
		function nl2br(str, is_xhtml) {
			var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br>' : '<br>';
			return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
		}
		function do_nl2br(){
			var str = $('#text').val();
			result = nl2br(str);
			$('#result').html(result);
			return false;
		}
	</script>
	<style type="text/css">
		* {
			margin:0;
			border:0;
			padding:0;
		}
		body {
			background-color: #252830;
			text-align: center;
		}
		textarea {
			width: 400px;
			height: 600px;
			border:1px transparent;
			border-radius: 4px;
			padding: 5px;
			margin: 20px 5px;
		}
		textarea[id="result"]{
			background-color: #EEE;
		}
	</style>
</head>
<body>
<textarea id="text" onkeyup="return do_nl2br()"></textarea>
<textarea id="result" readonly="readonly"></textarea>
</body>
</html>