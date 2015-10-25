<?php

class Admin_Controller extends Controller
{
    public function index_action()
    {
        echo $this->view->render('Admin/admin_template_view.html.twig');
    }

    public function news_action()
    {
        $admin_model = $this->loadModel('Admin');
        $data['news'] = $admin_model->getNews();
        echo $this->view->render('Admin/admin_template_view.html.twig', $data['news']);
    }
}