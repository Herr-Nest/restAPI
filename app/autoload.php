<?php

function loadClass($class)

{
    if(file_exists('classes/'.$class.'.php')){
        require 'classes/' . $class . '.php';
    }
    elseif(file_exists('twitteroauth/src/'.$class.'.php')){
        require 'twitteroauth/src/' . $class . '.php';
    }

}

spl_autoload_register('loadClass');
TPL::render("navbar.html",array());

?>