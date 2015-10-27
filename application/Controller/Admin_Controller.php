<?php

class Admin_Controller extends Controller
{
    function __construct()
    {
        $this->checkStaff();
        parent::__construct();
    }

    protected function checkStaff()
    {
        $admin_model = $this->loadModel('Admin');
        if(isset($_SESSION['email'])){
            $role = Model::isStaff($_SESSION['email']);
            if ($role != 'admin'){
                $admin_model->redirect('/login');
            }
        } else {
            $admin_model->redirect('/login');
        }
    }

    public function index_action()
    {
        echo $this->view->render('Admin/admin_main_view.html.twig');
    }

    public function news_action()
    {
        $admin_model = $this->loadModel('Admin');
        $data['news'] = $admin_model->getNews();
        echo $this->view->render('Admin/admin_main_view.html.twig', $data);
    }

    public function article_add_action()
    {
        $admin_model = $this->loadModel('Admin');
        if(null !== $admin_model->request('save')){
            $title = $admin_model->request('title');
            $description = $admin_model->request('description');
            $full_text = $admin_model->request('full_text');
            $date = date('d-m-Y H:i:s');
            $values = array('title' => $title, 'description' => $description, 'full_text' => $full_text, 'date' => $date);
            if($admin_model->addArticle($values)){
                $admin_model->redirect('/admin/news');
            }
        }
        echo $this->view->render('Admin/admin_article_view.html.twig');
    }

    public function article_edit_action($id)
    {
        $admin_model = $this->loadModel('Admin');

        if(null !== $admin_model->request('save')){
            $title = $admin_model->request('title');
            $description = $admin_model->request('description');
            $full_text = $admin_model->request('full_text');
            $date = date('d-m-Y H:i:s');
            $newValues = array('title' => $title, 'description' => $description, 'full_text' => $full_text, 'date' => $date);
            if($admin_model->updateArticleById($id, $newValues)){
                $admin_model->redirect('/admin/news');
            }
        }

        $data['article'] = $admin_model->getArticleById($id);
        echo $this->view->render('Admin/admin_main_view.html.twig', $data);
    }

    public function article_delete_action($id)
    {
        $admin_model = $this->loadModel('Admin');
        $admin_model->deleteArticleById($id);
        $admin_model->redirect('/admin/news');
    }
}