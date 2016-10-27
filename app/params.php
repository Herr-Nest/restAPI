<?php
if(substr($_SERVER['DOCUMENT_ROOT'],strlen($_SERVER['DOCUMENT_ROOT'])-1)==="/") {
    $docRoot = $_SERVER['DOCUMENT_ROOT'];
}else{
    $docRoot=$_SERVER['DOCUMENT_ROOT']."/";
}

define('DIR_ROOT',$docRoot.'restAPI');
define('HTTP_HOST','/restAPI/');

define('DIR_TEMPLATE',DIR_ROOT.'/templates/');

define('DIR_JS',HTTP_HOST."js/");

define('DIR_CSS',HTTP_HOST."css/");

//define('API','http://172.16.60.7:8082/WebServiceRest/rest');
define('API','http://localhost:8090/WebServiceRest/rest');


