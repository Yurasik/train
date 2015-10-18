<?php

class Users_Controller extends Controller
{
    function __construct()
    {
        $this->model = new Users_Model();
        $this->content_view = 'users_view.php';
        parent::__construct();
    }

    public function index_action()
    {
        $this->model->redirect('/');
    }

    public function login_action()
    {
        $this->view->sidebar = false;
        $this->view->generate($this->content_view);
        if(null !== $this->model->request('authorization')){
            $this->model->Authorization();
        }
    }

    public function logout_action()
    {
        unset($_SESSION['login']);
        $this->model->redirect('/');
    }
}