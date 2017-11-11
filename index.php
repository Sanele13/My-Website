<?php 
echo "
<html>
	<head>
		<link rel = 'stylesheet' type = 'text/css' href = 'mystyle.css' />
		<title>Sanele Mpangalala</title>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script>
			function showMenu(){
				document.getElementById('menu').style.display='inline-block';
			}
		</script>
	</head>
	<body>
		<div class = 'container'>
			<div class = 'menu-icon2' id = 'menu'>
				<div class = 'bar-ting2'></div>
				<div class = 'bar-ting2'></div>
				<div class = 'bar-ting2'></div>
			</div>
			<div class = 'menu-icon'  onclick = 'showMenu()'>
				<div class = 'bar-ting'></div>
				<div class = 'bar-ting'></div>
				<div class = 'bar-ting'></div>
			</div>
		</div>
	<body>
</html>
";

?>