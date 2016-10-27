<?php

$screenName=Request::getParam('screenName');
$user=Session::getSession();
$opts=array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"Accept-language: en\r\n" .
            "Autorisation:".$user['key'],
    )
);
$context = stream_context_create($opts);

$listTweets=json_decode(file_get_contents(API."/APITwitter/friend/$screenName/tweets",false,$context));

$listTweetsHtml="";

foreach ($listTweets as $tweet){
    $listTweetsHtml .=  "<div>".$tweet->html."<span id='$tweet->id' class='addFav' href='javascript:void(0)'>Ajouter au Favoris</span></div>";
}

TPL::render('timeline.html',array('tweets'=>$listTweetsHtml,"user"=>$user));



