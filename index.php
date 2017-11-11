<?php 
echo "
<html>
<html>
	<head>
		<link rel = 'stylesheet' type = 'text/css' href = 'mystyle.css' />
		<title>Sanele Mpangalala</title>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script>
			
			$(document).ready(function(){
				var clicked=0;
				$('.menu-icon').click(function(){
					var leftVal = '10px';
					
					if(clicked===0){
						$('.menu-icon2').animate({left:'250px'}, "slow");clicked=1;
					}
					else{$('.menu-icon2').animate({left:leftVal}, "slow");clicked=0;}
					
				});
			});
		</script>
	</head>
	<body>
		<div class = 'container'>
			<div class = 'menu-icon2' >
				<div class = 'bar-ting2'></div>
				<div class = 'bar-ting2'></div>
				<div class = 'bar-ting2'></div>
			</div>
			<div class = 'menu-icon'  id = 'menu'>
				<div class = 'bar-ting'></div>
				<div class = 'bar-ting'></div>
				<div class = 'bar-ting'></div>
			</div>
		</div>
	<body>
</html>
";

?>