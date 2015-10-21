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

        $this->view->sidebar = false;
        $this->view->generate('register_view.php');
    }

    public function login_action()
    {
        if(null !== $this->model->request('authorization')){
            $this->model->authorization();
        }

        $this->view->sidebar = false;
        $this->view->generate('authorization_view.php');
    }

    public function logout_action()
    {
        unset($_SESSION['login']);
        $this->model->redirect('/');
    }
}