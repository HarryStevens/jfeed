<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!--JS-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="js/facebook.js"></script>
		<script type="text/javascript" src="js/map.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<!--CSS-->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
		
		<link rel="stylesheet" href="css/map.css" />
		<link rel="stylesheet" href="css/style.css" />
		
		<!--Favicon-->
		<link rel="shortcut icon" type="image/png" href="icons/favicon.png" />

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>JFeed | Map</title>
	</head>
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
						<a class="navbar-brand" href="http://jfeed.co"><span class="j-title"><sub>J</sub></span>Feed</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="profile.php">Profile</a></li>
							<li class="activate"><a href="#">Map</a></li>
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

		<div id="map-space" class="col-md-12">
			<div id="map-search" class="row">
				<div class="col-md-2">
					
				</div>
				<!--SEARCH FIRST NAME-->
				<div class="map-search-item col-md-2">
					<input class="map-search-field" type="text" id="search-string_firstname" placeholder="Search by first name" onfocus="this.value='';" onkeypress="if (event.keyCode==13){ changeMap_firstname();}">
					<span class="clickable glyphicon glyphicon-search" onclick="changeMap_firstname()"></span>
				</div>
				<!--SEARCH LAST NAME-->
				<div class="map-search-item col-md-2">
					<input class="map-search-field" type="text" id="search-string_lastname" placeholder="Search by last name" onfocus="this.value='';" onkeypress="if (event.keyCode==13){ changeMap_lastname();}">
					<span class="clickable glyphicon glyphicon-search" onclick="changeMap_lastname()"></span>
				</div>
				<!--SEARCH COMPANY-->
				<div class="map-search-item col-md-2">
					<input class="map-search-field" type="text" id="search-string_company" placeholder="Search by company" onfocus="this.value='';" onkeypress="if (event.keyCode==13){ changeMap_company();}">
					<span class="clickable glyphicon glyphicon-search" onclick="changeMap_company()"></span>
				</div>
				<!--SEARCH POSITION-->
				<div class="map-search-item col-md-2">
					<input class="map-search-field" type="text" id="search-string_position" placeholder="Search by position" onfocus="this.value='';" onkeypress="if (event.keyCode==13){ changeMap_position();}">
					<span class="clickable glyphicon glyphicon-search" onclick="changeMap_position()"></span>
				</div>
				<div class="col-md-2">

				</div>
			</div>
			<div class="col-md-2">
				
			</div>
			<div id="map-canvas" class="col-md-8">

			</div>
			<div class="col-md-2">

			</div>

		</div>

		<!--LOGIN MODAL-->
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">JFeed login</h4>
					</div>
					<div class="modal-body">
						<div class="login-text">
							By logging in, you can connect with other users and take advantage of all the great tools that JFeed offers!
						</div>
						<div class="login-button">
							<fb:login-button size="xlarge" auto_logout_link="true" scope="public_profile,user_about_me,user_education_history,user_location,user_work_history" onlogin="checkLoginState();"></fb:login-button>
							<br />
							<br />
							<br />
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--FOOTER-->
		<div id="footer">
			<div class="footer-content">
				&#169; JFeed, 2014
			</div>
		</div>

	</body>

</html>
