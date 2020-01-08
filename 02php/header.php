<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>php layout</title>
</head>
<style>
	*{margin: 0;padding: 0;}
	li{list-style: none;}
	a:visited,a:link{text-decoration: none;color:black;}
		.clearfix:after{content: "";display: block;clear: both;}

		#header{width: 960px;margin: 0 auto;background-color: skyblue;}
		#header h1{width: 150px;margin: 0 auto;text-align: center;background-color:#0f0;}

		#header .gnb>ul>li{float: left;width: 20%;}
		#header .gnb>ul>li>a{display: block;
							line-height: 30px;
							text-align: center;
							background-color: red;

					}
		.visual{height: 300px;background-color: pink;}		

		section#container{width: 960px;height: 1000px;background-color:#555;margin: 0 auto;}		
		footer#footer{height: 100px;background-color: skyblue;}			
</style>
<body>
	<header id="header">
		<h1>logo</h1>
		<nav class="gnb">
			<ul class="clearfix">
				<li><a href="#">menu1</a></li>
				<li><a href="#">menu2</a></li>
				<li><a href="#">menu3</a></li>
				<li><a href="#">menu4</a></li>
				<li><a href="#">menu5</a></li>
			</ul>
		</nav>
	</header>