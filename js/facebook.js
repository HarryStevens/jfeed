// This is called with the results from from FB.getLoginStatus().
function statusChangeCallback(response) {
	console.log('statusChangeCallback');
	console.log(response);
	// The response object is returned with a status field that lets the
	// app know the current login status of the person.
	// Full docs on the response object can be found in the documentation
	// for FB.getLoginStatus().
	if (response.status === 'connected') {
		// Logged into your app and Facebook.
		testAPI();
	} else if (response.status === 'not_authorized') {
		// The person is logged into Facebook, but not your app.
		document.getElementById('status').innerHTML = 'Sign in ' + 'with Facebook.';
	} else {
		// The person is not logged into Facebook, so we're not sure if
		// they are logged into this app or not.
		document.getElementById('status').innerHTML = 'Sign in ' + 'with Facebook.';
	}
}

// This function is called when someone finishes with the Login
// Button.  See the onlogin handler attached to it in the sample
// code below.
function checkLoginState() {
	FB.getLoginStatus(function(response) {
		statusChangeCallback(response);
	});
}

window.fbAsyncInit = function() {
	FB.init({
		appId : '469565369845051',
		status : true,
		cookie : true, // enable cookies to allow the server to access
		// the session
		xfbml : true, // parse social plugins on this page
		version : 'v2.0' // use version 2.0
	});

	// Now that we've initialized the JavaScript SDK, we call
	// FB.getLoginStatus().  This function gets the state of the
	// person visiting this page and can return one of three states to
	// the callback you provide.  They can be:
	//
	// 1. Logged into your app ('connected')
	// 2. Logged into Facebook, but not your app ('not_authorized')
	// 3. Not logged into Facebook and can't tell if they are logged into
	//    your app or not.
	//
	// These three cases are handled in the callback function.

	FB.getLoginStatus(function(response) {
		statusChangeCallback(response);
	});

};

// Load the SDK asynchronously
( function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id))
			return;
		js = d.createElement(s);
		js.id = id;
		js.src = "http://connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

// Here we run a very simple test of the Graph API after login is
// successful.  See statusChangeCallback() for when this call is made.
function testAPI() {
	console.log('Welcome!  Fetching your information.... ');
	FB.api('/me', function(response) {
		console.log('Successful login for: ' + response.name);
		//PUT CODE HERE TO DO WHEN YOU'RE LOGGED IN
		if (window.location.href.match("/index.php")) {
			window.location.href = "/profile.php";
		} else if (window.location.href == "http://jfeed.co/") {
			window.location.href = "/profile.php";
		} else {
			console.log(response);
			//Load profile picture and display on profile page
			FB.api('/me/picture?width=225', function(response) {
				document.getElementById("profile-image").setAttribute("src", response.data.url);
			});
			//Load user info and display on profile page
			document.getElementById("user-name").innerHTML = response.name;
			document.getElementById("bio").innerHTML = response.bio;
			document.getElementById("address").innerHTML = response.location.name;
			document.getElementById("position").innerHTML = response.work[0].position.name;
			document.getElementById("employer").innerHTML = response.work[0].employer.name;
			var latestSchool = (response.education.length)-1;
			document.getElementById("education").innerHTML = response.education[latestSchool].school.name;
			

			//History.js for header titles. URL must remain the same because there's no way to handle reloads right now. Once the database is working, this can change
			History.pushState({
				state : 1
			}, "JFeed | "+response.name, "/");
		}
	});
}

function Logout() {
	FB.logout(function(response) {
		window.location.href = "http://jfeed.co/";
	});
}
