<?php

class Controller_Users extends Controller
{
    function __construct()
    {
        $this->model = new Model_Users();
        $this->content_view = 'personal_view.php';
        parent::__construct();
    }

    public function action_index()
    {
        $this->view->sidebar = false;
        $this->view->generate($this->content_view);
        if(isset($_REQUEST['reg'])){
            $result = $this->model->userRegister();
            If ($result) {
                $_SESSION['register'] = 'Поздравляем! Регистрация прошла успешно.';
            } else {
                $_SESSION['register'] = 'Ошибка при регистрации.';
                unset($_SESSION['register']);
            }
        }
    }
}