<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<!--JS-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript" src="js/facebook.js"></script>
		<script type="text/javascript" src="js/map.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<!--CSS-->
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/map.css" />
		<link rel="stylesheet" href="css/style.css" />

		<!--Favicon-->
		<link rel="shortcut icon" type="image/png" href="icons/favicon.png" />

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>JFeed</title>
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
						<a class="navbar-brand" href="#top"><span class="j-title"><sub>J</sub></span>Feed</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#about">About</a>
							</li>
							<li>
								<a href="#contact">Contact</a>
							</li>
							<li>
								<a data-toggle="modal" data-target="#loginModal" href="#">Login</a>
							</li>

						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
		</div>
		</nav>

		<!--END TOP NAV-->

		<div id="home-top-image"><img src="images/home-background.JPG" />
		</div>
		<div id="home-body">
			<div id="home-top">

				<h1>The ultimate network for J-School graduates.</h1>
				<ul class="home-list">
					<li>
						Keep in touch with J-School friends.
					</li>
					<li>
						Connect with former classmates.
					</li>
					<li>
						Build a professional network.
					</li>
				</ul>
				<div id="home-login">
					<fb:login-button href="profile.php" size="xlarge" auto_logout_link="true" scope="public_profile,user_about_me,user_education_history,user_location,user_work_history" onlogin="checkLoginState();">Log in to JFeed</fb:login-button>
				</div>
			</div><!--End home-top-->

			<div id="home-content">
				<!--ABOUT SECTION-->
				<div id="home-about">
					<a id="about">&nbsp;</a>
					<div id="about-content">
						<h1>About</h1>
						<p>
							JFeed is a social network for J-School graduates. JFeed lets you find out what your classmates are up to in the wide world of journalism. 
						</p>
						<p>
							All you need is a Facebook account to get started. Log in to connect with all your J-School classmates on JFeed!
						</p>
					</div>
				</div>
				<hr />

				<!--CONTACT SECTION-->
				<a id="contact">&nbsp;</a>
				<div id="home-contact">
					<h1>Contact</h1>
					<p>
						<b>Harry Stevens</b> - Co-Founder & Chief Technology Officer<br />harryjosephstevens [AT] gmail [DOT] com.
					</p>
					<p>
						<b>Indrani Basu</b> - Co-Founder & Chief Marketing Officer
					</p>
				</div>

			</div><!--end home content-->
		</div><!--end home body-->

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
							<fb:login-button size="xlarge" auto_logout_link="true" scope="public_profile,user_about_me,user_education_history,user_location,user_work_history" onlogin="checkLoginState();">Log in to JFeed</fb:login-button>
							<br />
							<br />
							<br />
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="hella-space">
			&nbsp;
		</div>

		<div id="footer">
			<div class="footer-content">
				&#169; JFeed, 2014
				<div class="hella-space">&nbsp;</div>
			</div>
		</div>
	</body>
</html>

