<!DOCTYPE html>
<!--HTML,CSSのみでの作成を目指した-->
<html lang= "ja">
<head>
	<meta charset= "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel= "stylesheet" href= "Sverigeshus.css">
	<link rel= "stylesheet" href= "SverigeshusResponsive.css">
	<script src= "Sverigeshus.js"></script>
	<title>POLL: Sverigeshus</title>
</head>

<body>
<p>
	<?php
		$poll = $_GET['radio_poll']
		echo ("${poll}に投票しました！投票ありがとうございます。"); 
	?>
</p>
</body>
</html>