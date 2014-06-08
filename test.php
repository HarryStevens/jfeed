<?php
    require 'client/facebook.php';
	
	$app_id = '469565369845051';
	$secret = 'a51bff788776dc2766534e533ced0223';
	$app_url = 'http://jfeed.co/';

    //Create application instance
    $facebook = new Facebook(array(
		'appId' => $app_id,
		'secret' => $secret,
	));
    
	//Get user ID
	$user = $facebook->getUser();
	
	//Login or logout URL needed depending on current user state
	if (!$user) {
		$loginUrl = $facebook->getLoginUrl(array('scope'=> 'email,publish_stream','redirect_url'));
		//Redirect URL to prompt for login and permissions
		echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
	} else {
		try {
			//Proceed knowing you have logged in user who's authenticated
			$user_profile = $facebook
		}
	}
?>