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
        if($this->request('email') != '' && $this->request('password') != ''){
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
                Model::setMessage('Пользователя с такой почтой не существует!');
            }
        } else {
            Model::setMessage('Не все поля заполнены!');
        }
    }

    public function register()
    {
        if($this->request('email') != '' && $this->request('password') != ''){
            $email = $this->request('email');
            $password = $this->request('password');
            $hashPassword = md5(SECRET_WORD.$password);

            if(!$this->existEmail($email)){

                if($this->validEmail($email)){
                    $values = array('email' => $email, 'password' => $hashPassword, 'status' => 'user');
                    $result = $this->insert($this->table_name, $values);
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
        } else {
            Model::setMessage('Не все поля заполнены!');
        }
    }

    public function addArticle($values)
    {
        $data = $this->insert('news', $values);
        return $data;
    }
}