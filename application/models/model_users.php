<?php

class Model_Users extends Model
{
    protected $table;

    function __construct()
    {
        $this->table = 'users';
    }

    public function userRegister()
    {
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $hashPassword = md5(SECRET_WORD.$password);
        $values = array('email', 'password');
        $newValues = array($email, $hashPassword);
        $result = $this->insert($this->table, $values, $newValues);
        if($result){
            $_SESSION['email'] = $email;
        }
        return $result;
    }
}