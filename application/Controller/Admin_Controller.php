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
        $data['category'] = $admin_model->getCategory();

        if(null !== $admin_model->request('save')){
            $title = $admin_model->request('title');
            $full_text = $admin_model->request('full_text');
            $description = substr($full_text, 0, 250);
            $category_id = $admin_model->request('category');
            $author_id = $admin_model->getAuthorId($_SESSION['email']);
            $date = date('d-m-Y H:i:s');
            $values = array(
                'category_id' => $category_id,
                'author_id' => $author_id['id'],
                'title' => $title,
                'description' => $description,
                'full_text' => $full_text,
                'date' => $date);
            if($admin_model->addArticle($values)){
                $admin_model->redirect('/admin/news');
            }
        }

        echo $this->view->render('Admin/admin_article_view.html.twig', $data);
    }

    public function article_edit_action($id)
    {
        $admin_model = $this->loadModel('Admin');
        $data['article'] = $admin_model->getArticleById($id);
        $data['category'] = $admin_model->getCategory();

        if(null !== $admin_model->request('save')){
            $title = $admin_model->request('title');
            $full_text = $admin_model->request('full_text');
            $description = substr($full_text, 0, 250);
            $date = date('d-m-Y H:i:s');
            $newValues = array('title' => $title, 'description' => $description, 'full_text' => $full_text, 'date' => $date);
            if($admin_model->updateArticleById($id, $newValues)){
                $admin_model->redirect('/admin/news');
            }
        }

        echo $this->view->render('Admin/admin_main_view.html.twig', $data);
    }

    public function article_delete_action($id)
    {
        $admin_model = $this->loadModel('Admin');
        $admin_model->deleteArticleById($id);
        $admin_model->redirect('/admin/news');
    }
}