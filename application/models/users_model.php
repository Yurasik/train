<?php

class Users_Model extends Model
{
    public function Authorization()
    {
        $login = $this->request('login');
        if($this->existUser($login)){
            $password = $this->request('password');
            $hashPassword = md5(SECRET_WORD.$password);
            if($this->checkPassword($login, $hashPassword)){
                session_start();
                $_SESSION['login'] = $login;
                $this->redirect('/');
            } else{
                $_SESSION['authorization_info'] = 'Ошибка авторизации';
                $this->redirect('/login');
            }
        } else {
            $_SESSION['authorization_info'] = 'Пользователя с таким Логином не существует';
            $this->redirect('/login');
        }
    }
}