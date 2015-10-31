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
        echo $this->view->render('Admin/admin_news_view.html.twig', $data);
    }

    public function article_add_action()
    {
        $admin_model = $this->loadModel('Admin');
        $data['category'] = $admin_model->getCategory();

        if(null !== $admin_model->request('save')){
            $title = $admin_model->request('title');
            $full_text = $admin_model->request('full_text');
            $description = $admin_model->getDescription($full_text);
            $category_id = $admin_model->request('category');
            $author_id = $admin_model->getAuthorId($_SESSION['email']);
            $date_model = new DateTime();
            $date = $date_model->getTimestamp();
            $values = array(
                'category_id' => $category_id,
                'author_id' => $author_id['id'],
                'title' => $title,
                'description' => $description,
                'full_text' => $full_text,
                'date' => $date,
                'status' => 'published');
            if($admin_model->addArticle($values)){
                $admin_model->redirect('/admin/news');
            }
        }
        $data['article_add'] = true;

        echo $this->view->render('Admin/admin_news_view.html.twig', $data);
    }

    public function article_edit_action($id)
    {
        $admin_model = $this->loadModel('Admin');
        $data['article_edit'] = $admin_model->getArticleById($id);
        $data['category'] = $admin_model->getCategory();

        if(null !== $admin_model->request('save')){
            $title = $admin_model->request('title');
            $full_text = $admin_model->request('full_text');
            $description = substr($full_text, 0, 250);
            $date_model = new DateTime();
            $date = $date_model->getTimestamp();
            $newValues = array(
                'title' => $title,
                'description' => $description,
                'full_text' => $full_text,
                'date' => $date);

            if($admin_model->updateArticleById($id, $newValues)){
                $admin_model->redirect('/admin/news');
            }
        }

        echo $this->view->render('Admin/admin_news_view.html.twig', $data);
    }

    public function article_delete_action($id)
    {
        $admin_model = $this->loadModel('Admin');
        $admin_model->deleteArticleById($id);
        $admin_model->redirect('/admin/news');
    }

    public function category_action()
    {
        $admin_model = $this->loadModel('Admin');
        $data['category'] = $admin_model->getCategory();
        echo $this->view->render('Admin/admin_news_view.html.twig', $data);
    }

    public function category_add_action()
    {
        $admin_model = $this->loadModel('Admin');
        $data['category'] = $admin_model->getCategory();

        if(null !== $admin_model->request('save')){
            $parent_id = $admin_model->request('parent_id');
            $category_name = $admin_model->request('category_name');
            $values = array('parent_id' => $parent_id, 'category_name' => $category_name);

            if($admin_model->addCategory($values)){
                $admin_model->redirect('/admin/category');
            }
        }

        $data['category_add'] = true;
        echo $this->view->render('Admin/admin_news_view.html.twig', $data);
    }

    public function category_edit_action($id)
    {
        $admin_model = $this->loadModel('Admin');
        $data['category_info'] = $admin_model->getCategoryById($id);
        $data['category'] = $admin_model->getCategoryExceptId($id);

        if(null !== $admin_model->request('save')){
            $id = $admin_model->request('id');
            $parent_id = $admin_model->request('parent_id');
            $category_name = $admin_model->request('category_name');
            $newValues = array('parent_id' => $parent_id, 'category_name' => $category_name);
            if($admin_model->editCategoryById($id, $newValues)){
                $admin_model->redirect('/admin/category');
            }
        }

        $data['category_edit'] = true;
        echo $this->view->render('Admin/admin_news_view.html.twig', $data);
    }

    public function category_delete_action($id)
    {
        $admin_model = $this->loadModel('Admin');
        $admin_model->deleteCategoryById($id);
        $admin_model->redirect('/admin/category');
    }
}