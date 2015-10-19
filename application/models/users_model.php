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
        $login = $this->request('login');
        if($this->existUser($login)){
            $password = $this->request('password');
            $hashPassword = md5(SECRET_WORD.$password);
            if($this->checkPassword($login, $hashPassword)){
                session_start();
                $_SESSION['login'] = $login;
                $this->redirect('/');
            } else{
                $_SESSION['authorization_info'] = 'Ошибка авторизации!';
                $this->redirect('login');
            }
        } else {
            $_SESSION['authorization_info'] = 'Пользователя с таким логином не существует.';
            $this->redirect('login');
        }
    }

    public function register()
    {
        $login = $this->request('login');
        $login = trim($login);
        $login = htmlspecialchars($login);
        $email = $this->request('email');
        $password = $this->request('password');
        $hashPassword = md5(SECRET_WORD.$password);

        if(!$this->existUser($login) || !$this->existEmail($email)){
            if($this->validLogin($login)){
                if($this->validEmail($email)){
                    $values = array('login', 'email', 'password', 'status');
                    $newValues = array($login, $email, $hashPassword, 'user');
                    $result = $this->insert($this->table_name, $values, $newValues);
                    if($result){
                        $_SESSION['authorization_info'] = 'Регистрация прошла успешно. Вы можете войти на сайт под своим логином и паролем, указанным при регистрации.';
                        $this->redirect('login');
                    } else {
                        $_SESSION['register_info'] = 'Ошибка регистрации. Попробуйте повторить попытку еще раз.';
                        $this->redirect('register');
                    }
                } else {
                    $_SESSION['register_info'] = 'Неверно заполнено поле Почта.';
                    $this->redirect('register');
                }
            } else {
                $_SESSION['register_info'] = 'Неверено заполнено поле Логин. (Логин не может быть меньше 3 и больше 32 символов.
                Логин может состоять из букв, цифр, и символов "-" и "_".';
                $this->redirect('register');
            }
        } else {
            $_SESSION['register_info'] = 'Пользователя с таким Логином/Почтой уже зарегестрирован.';
            $this->redirect('register');
        }
    }
}