<?php


class Session
{


    static function createSession($pScreenName, $pKey,$pid){

        $_SESSION['isConnected']=true;
        $_SESSION['screenName']=$pScreenName;
        $_SESSION['key']=$pKey;
        $_SESSION['id']=$pid;
    }

    static function isConnected(){

        return isset($_SESSION['isConnected'])?$_SESSION['isConnected']:false;
    }

    static function getSession(){
        $user=array();
        if(Session::isConnected()){
            $user= array('screenName'=>$_SESSION['screenName'],
                            'key' => $_SESSION['key'],
                            'id' => $_SESSION['id']);
        }
        return $user;
    }





}