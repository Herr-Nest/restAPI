<?php

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;



$connection = new TwitterOAuth('nOv65OYtOkvl1VbW0mPp8nihw','2UeomeAoIxDDFKIWqgwc1UOg62wz8yxn43yKAIf4GATG39ZD1v','565252075-cFhsF2dKb4GvMC17nyP7UgchObVxf98kPWiqKg5d','blpcK3sh2xiVgwzWSXqpu2uCK8UHVSaRIMkCmJfVN3awK');

$tweets = $connection->get("statuses/user_timeline",array('screen_name' => $screenName));
TPL::render('friends.html');
foreach ($tweets as $tweet){
    TPL::render('timeline.html',$tweets);
}
var_dump($tweets);