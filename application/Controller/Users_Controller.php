<?php

class Users_Controller extends Controller
{


    function __construct()
    {
        parent::__construct();
        $this->view->addGlobal('status_info', 'q');
    }

    public function register_action()
    {
        $user_model = $this->loadModel('Users');

        if(null !== $user_model->request('register')){
            $user_model->register();
        }

        if(isset($_SESSION['email'])){
            $this->redirect('/');
        }

        if(isset($_COOKIE['email'])){
            $data['email'] = $_COOKIE['email'];
        }
        $data['message'] = Model::getMessage();
        echo $this->view->render('Users/register_view.html.twig', $data);
    }

    public function login_action()
    {
        $user_model = $this->loadModel('Users');

        if(null !== $user_model->request('authorization')){
            $user_model->authorization();
        }

        if(isset($_SESSION['email'])){
            $this->redirect('/');
        }

        if(isset($_COOKIE['email'])){
            $data['email'] = $_COOKIE['email'];
        }
        $data['message'] = Model::getMessage();
        echo $this->view->render('Users/authorization_view.html.twig', $data);
    }

    public function logout_action()
    {
        unset($_SESSION['email']);
        $this->redirect('/');
    }
}