<?php

class Admin_Controller extends Controller
{

    function __construct()
    {
        $this->model = new Admin_Model();
        parent::__construct();
    }

    public function index_action()
    {
        echo $this->view->render('admin_template_view.php');
    }

    public function news_action()
    {
        $data['news'] = $this->model->getNews();
        echo $this->view->render('admin_template_view.php', $data['news']);
    }
}