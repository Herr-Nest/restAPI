<?php

    require_once('app/params.php');
	require_once('app/autoload.php');

    session_start();



$pg=Request::getParam('pg');
if(!Session::isConnected() && $pg!='login'){
    var_dump('vejsdkj');
    header('location:/restApi/login');
}

switch ($pg){
    case 'login' : include_once "www/login.php"; break;
    case 'tweetSaved': include_once "www/savedTweets.php"; break;
    case 'friendTweets': include_once "www/friendTweets.php"; break;
    case 'friends': include_once "www/friends.php"; break;
     default : 	TPL::render("accueil.html",array()); break;
}



?>