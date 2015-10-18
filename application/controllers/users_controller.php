<?php

class Users_Controller extends Controller
{
    function __construct()
    {
        $this->model = new Users_Model();
        parent::__construct();
    }

    public function index_action()
    {
        $this->model->redirect('/');
    }

    public function register_action()
    {
        $this->view->sidebar = false;
        $this->content_view = 'register_view.php';
        $this->view->generate($this->content_view);
        if(null !== $this->model->request('register')){
            $this->model->register();
        }
    }

    public function login_action()
    {
        $this->view->sidebar = false;
        $this->content_view = 'authorization_view.php';
        $this->view->generate($this->content_view);
        if(null !== $this->model->request('authorization')){
            $this->model->authorization();
        }
    }

    public function logout_action()
    {
        unset($_SESSION['login']);
        $this->model->redirect('/');
    }
}