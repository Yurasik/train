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
        $password = $this->request('password');
        $password = md5(SECRET_WORD.$password);
        if($this->existUser($login)){
            if($this->checkPassword($login, $password)){
                session_start();
                $_SESSION['login'] = $login;
                $this->redirect('/');
            } else{
                View::setPageInfo('Ошибка авторизации!');
            }
        } else {
            View::setPageInfo('Пользователя с таким логином не существует.');
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
                        View::setPageInfo('Регистрация прошла успешно. Вы можете войти на сайт под своим логином и паролем, указанным при регистрации.');
                    } else {
                        View::setPageInfo('Ошибка регистрации. Попробуйте повторить попытку еще раз.');
                    }
                } else {
                    View::setPageInfo('Неверно заполнено поле Почта.');
                }
            } else {
                View::setPageInfo('Неверено заполнено поле Логин. (Логин не может быть меньше 3 и больше 32 символов. Логин может состоять из букв, цифр, и символов "-" и "_".');
            }
        } else {
            View::setPageInfo('Пользователя с таким Логином/Почтой уже зарегестрирован.');
        }
    }
}