<?php


class Session
{


    static function createSession($pScreenName, $pKey){

        $_SESSION['isConnected']=true;
        $_SESSION['screenName']=$pScreenName;
        $_SESSION['key']=$pKey;
    }

    static function isConnected(){

        return isset($_SESSION['isConnected'])?$_SESSION['isConnected']:false;
    }

    static function getSession(){
        $user=array();
        if(Session::isConnected()){
            $user= array('screenName'=>$_SESSION['screenName'],
                            'key' => $_SESSION['key']);
        }
        return $user;
    }





}