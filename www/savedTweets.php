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
$id=$user['id'];
$listTweets=json_decode(file_get_contents(API."/APITwitter/user/$id/favoris",false,$context));

$listTweetsHtml="";
if(!empty($listTweets)){
foreach ($listTweets as $tweet){
    $listTweetsHtml .=  "<div>".$tweet->html."</div>";

}
}
TPL::render('timeline.html',array('tweets'=>$listTweetsHtml,"user"=>$user));




