<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!--JS-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="js/jquery.history.js"></script>
		<script type="text/javascript" src="js/facebook.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<!--CSS-->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/profile.css" />

		<!--Favicon-->
		<link rel="shortcut icon" type="image/png" href="icons/favicon.png" />

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>JFeed | Profile</title>
	</head>
	<body>
		<a id="top"></a>
		<div class="container-fluid">
			<!--TOP NAV-->
			<nav id="top-nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><span class="j-title"><sub>J</sub></span>Feed</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="activate"><a href="#">Profile</a></li>
							<li><a href="map.php">Map</a></li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span> </a>
								<ul class="dropdown-menu">
									<li><a onclick="Logout();">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
		</div>
		</nav>

		<!--END TOP NAV-->
		<div id="profile-wrapper">
			<img id="profile-image" src="" />
			<div id="user-name"></div>
			<div id="job"><span id="position"></span>, <span id="employer"></span></div>
			<div class="profile-field">Location:</div> <div id="address"></div>
			<div class="profile-field">Bio:</div> <div id="bio"></div>  
			<div class="profile-field">Education:</div> <div id="education"></div> 
		</div>

		<!--FOOTER-->
		<div id="footer">
			<div class="footer-content">
				&#169; JFeed, 2014
			</div>
		</div>
	</body>
