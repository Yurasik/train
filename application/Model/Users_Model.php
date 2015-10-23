<?php

class Users_Model extends Model
{
    protected $table_name;

    function __construct()
    {
        $this->table_name = 'users';
    }

    public function authorization()
    {
        $email = $this->request('email');
        $password = $this->request('password');

        if($this->existEmail($email) && $password != ''){
            $hashPassword = md5(SECRET_WORD.$password);
            if($this->checkPassword($email, $hashPassword)){
                $_SESSION['email'] = $email;
                setcookie('email', $email, time()+157680000);

            } else{
                Model::setMessage('Ошибка авторизации!');
            }
        } else {
            Model::setMessage('Пользователя с такой почтой не существует.');
        }
    }

    public function register()
    {
        $email = $this->request('email');
        $password = $this->request('password');

        if($password != ''){
            $hashPassword = md5(SECRET_WORD.$password);
        } else {
            Model::setMessage('Не верно заполнено поле Пароль');
        }

        if(!$this->existEmail($email)){

            if($this->validEmail($email)){
                $values = array('email', 'password', 'status');
                $newValues = array($email, $hashPassword, 'user');
                $result = $this->insert($this->table_name, $values, $newValues);

                if($result){
                    $_SESSION['email'] = $email;
                } else {
                    Model::setMessage('Ошибка регистрации. Повторите попытку еще раз.');
                }
            } else {
                Model::setMessage('Не верно заполнено поле Почта.');
            }
        } else {
            Model::setMessage('Пользователь с такой почтой уже зарегестрирован.');
        }
    }
}