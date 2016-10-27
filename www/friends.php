<?php
$user=Session::getSession();
$opts=array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"Accept-language: en\r\n" .
            "Autorisation:".$user['key'],
    )
);
$context = stream_context_create($opts);



$friends=json_decode(file_get_contents(API."/APITwitter/user/".$user['screenName']."/friends",false,$context));

$nbUsers=count($friends);
TPL::render('friends.html');
$i=1;
foreach($friends as $friend){
    $open=($i%2!=0);
    $close= !$open || $i==$nbUsers;
    TPL::render('component-user.html',array('friend' => $friend,'open'=>$open,'close'=>$close));
    $i++;
}

