<?php

class Users_Controller extends Controller
{
    function __construct()
    {
        $this->model = new Users_Model();
        parent::__construct();
    }

    public function register_action()
    {
        if(null !== $this->model->request('register')){
            $this->model->register();
        }

        if(isset($_SESSION['email'])){
            $this->redirect('/');
        }

        $data['email'] = $_COOKIE['email'];
        $data['message'] = Model::getMessage();
        echo $this->view->render('register_view.php', $data);
    }

    public function login_action()
    {
        if(null !== $this->model->request('authorization')){
            $this->model->authorization();
        }

        if(isset($_SESSION['email'])){
            $this->redirect('/');
        }

        $data['email'] = $_COOKIE['email'];
        $data['message'] = Model::getMessage();
        echo $this->view->render('authorization_view.php', $data);
    }

    public function logout_action()
    {
        unset($_SESSION['email']);
        $this->redirect('/');
    }
}