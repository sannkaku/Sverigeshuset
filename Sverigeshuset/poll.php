<!DOCTYPE html>
<!--HTML,CSS�݂̂ł̍쐬��ڎw����-->
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
		echo ("${poll}�ɓ��[���܂����I���[���肪�Ƃ��������܂��B"); 
	?>
</p>
</body>
</html>