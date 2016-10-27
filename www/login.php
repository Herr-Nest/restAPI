<?php

if(Request::getParam('section')=="auth"){


$url=API."/login?login=".Request::getParam('login')."&password=".base64_encode(Request::getParam('password'));

    $content=get_headers($url,1);

    if(isset($content['screenName'])){
      Session::createSession($content['screenName'],$content['Token'],$content['id']);
    }
    header('location:/restApi');


}else{
    TPL::render('login.html');
    var_dump("i'm here");
}
