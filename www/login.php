<?php

if(Request::getParam('section')=="auth"){
//    $myURL = API."/login?";
//    $options = array("login"=>Request::getParam('login'),"password"=>base64_encode(Request::getParam('password')));
//    $myURL .= http_build_query($options,'','&');
//
//
//    $user=json_decode(file_get_contents($myURL));

$url=API."/login?login=".Request::getParam('login')."&password=".base64_encode(Request::getParam('password'));
    /*
   $options=array(
       CURLOPT_URL=>$url,
        CURLOPT_RETURNTRANSFER=>true,
        CURLOPT_HEADER=>true,
    );
    $CURL=curl_init();

    // Configuration des options de téléchargement
    curl_setopt_array($CURL,$options);

    // Exécution de la requête
    $content=curl_exec($CURL);      // Le contenu téléchargé est enregistré dans la variable $content. Libre à vous de l'afficher.
    var_dump($content);

// Fermeture de la session cURL
    curl_close($CURL);
*/
    $content=get_headers($url,1);
    var_dump($content);

    if(isset($content['screenName'])){
      Session::createSession($content['screenName'],$content['Token']);
    }
    header('location:/restApi');


}else{
    TPL::render('login.html');
    var_dump("i'm here");
}
