<?php

$cursor=Request::getParam('cursor');

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth('nOv65OYtOkvl1VbW0mPp8nihw','2UeomeAoIxDDFKIWqgwc1UOg62wz8yxn43yKAIf4GATG39ZD1v','565252075-cFhsF2dKb4GvMC17nyP7UgchObVxf98kPWiqKg5d','blpcK3sh2xiVgwzWSXqpu2uCK8UHVSaRIMkCmJfVN3awK');

$friends=$connection->get("friends/list",array('cursor'=>$cursor));

var_dump($friends->users);