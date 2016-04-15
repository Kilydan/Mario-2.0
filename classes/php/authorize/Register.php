<?php

class Register
{
    // db config
//    protected $db_host = DB_HOST;
//    protected $db_name = DB_NAME;
//    protected $db_user = DB_USER;
//    protected $db_pass = DB_PASS;

    // errors
    protected $errors = [];

    // user credentials
    protected $username = '';
    protected $password = '';
    protected $password_repeat = '';

    public function __construct($username = null, $password = null, $password_repeat = null)
    {
        if ($username && $password && $password_repeat){
            //require_once '../../../config/db.php';
            $this->username = $username;
            $this->password = $username;
            $this->password_repeat = $username;

            registerNewUser();
        }else{
            return false;
        }
    }

    protected function registerNewUser(){
        return 'success';
    }
}