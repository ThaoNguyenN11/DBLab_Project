<?php
include_once ("../../init.php");

class user{
    protected $user ;
    function login ($username,$password) :bool
    {
        global $db;
        $query = sqlsrv_query($db,"SELECT * FROM  customer WHERE username = '" . $username . "'AND password ='" . $password . "'");
        $this->user['username'] =  sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC)['username'];
        if($this->user['username'])
            return true;
        else
            return false;
    }

    function getUser(){
        return $this->user['username'];
    }
}
