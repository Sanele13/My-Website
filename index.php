<?php
	echo "
		<html>
		<head>
			<title>Sanele Mpangalala</title>
			<meta name='viewport' content='width=device-width, initial-scale=1.0'>
			<link rel = 'stylesheet' type = 'text/css' href = 'mystyle.css'>
			<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
			<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
			<script >
				
				$(document).ready(function(){
					var clicked=0;
					$('.menu-icon').click(function(){
						var leftVal = '10px';
						if(clicked===0){
							$('.container').animate({left:'220px'}, 'slow');clicked=1;
						}
						else{
							$('.container').animate({left:'5px'}, 'slow');clicked=0;
						}
						
					});
				});
			</script>
		</head>
	<body>
		<h1 id= 'title'>Sanele Mpangalala</h1>
		
		<!--div class='nav-menu'-->
			<ul class = 'nav-menu'>
				<li class = 'nav-item'><a href = 'index.php'>Home</a></li>
				
				<li class = 'nav-item drop-down'><a href = '#'>Projects</a>
					<ul class='drop-down-content'>
						<li><a href = '#'>CarbAnalyser</a></li>
						<li><a href = '#'>Temperature Monitor</a></li>
						<li><a href = '#'>Security System</a></li>
						<li><a href = '#'>RESTful API</a></li>
						<li><a href = '#'>Emailing Web App</a></li>
					</ul>
				</li>
				<li class = 'nav-item'><a href = '#'>Blog</a></li>
				<li class = 'nav-item'><a href = '#'>Contact</a></li>
				<li class = 'nav-item'><a href = '#'>About</a></li>
			</ul>
		<!--Navigation Menu Icon for mobile-->
		<div class = 'container'>
			<div class = 'sliding-menu'>
				<ul class = 'nav-menu-small'>
					<li><a href= '#'>Home</a><li>
					<li><a href= '#'>Projects</a><li>
					<li><a href= '#'>Blog</a><li>
					<li><a href= '#'>Contact</a><li>
					<li><a href= '#'>About</a><li>
				</ul>
			</div>
			<div class = 'menu-icon'>
				<div class='bar-ting'></div>
				<div class='bar-ting'></div>
				<div class='bar-ting'></div>
			</div>
		</div>
		<!--/div-->
		<div class = 'footer'>
			<div class = 'social-icons'>
				<div class = 'github'><a class='fa fa-github-square' style='font-size:36px;color:white' href = 'https://github.com/Sanele13'></a></div>
				<div class = 'linkedin'><a class='fa fa-linkedin-square' style='font-size:36px;color:white' href = 'https://za.linkedin.com/in/sanele-mpangalala-199318a4'></a></div>
				<div class = 'facebook'><a class='fa fa-facebook-square' style='font-size:36px;color:white' href = 'https://facebook.com/smpangalala'></a></div>
			</div>
		</div>
	</body>
	</html>";
?>