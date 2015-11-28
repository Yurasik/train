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
        $news = $admin_model->getNews();
        echo $this->view->render('Admin/admin_news_view.html.twig', array('news' => $news));
    }

    public function article_add_action()
    {
        $admin_model = $this->loadModel('Admin');
        $category = $admin_model->getCategory();

        if(null !== $admin_model->request('save')){
            $title = $admin_model->request('title');
            $article_slug = $admin_model->makeTranslite($title);
            $full_text = $admin_model->request('full_text');
            $description = $admin_model->getDescription($full_text);
            $category_id = $admin_model->request('category');
            $author_id = $admin_model->getAuthorId($_SESSION['email']);
            $date_model = new DateTime;
            $date = $date_model->getTimestamp();
            $values = array(
                'category_id' => $category_id,
                'author_id' => $author_id['id'],
                'title' => $title,
                'article_slug' => $article_slug,
                'description' => $description,
                'full_text' => $full_text,
                'created_at' => $date,
                'status' => 'published');
            if($admin_model->addArticle($values)){
                $admin_model->redirect('/admin/news');
            }
        }

        echo $this->view->render('Admin/admin_news_view.html.twig', array('category' => $category, 'article_add' => true));
    }

    public function article_edit_action($slug)
    {
        $admin_model = $this->loadModel('Admin');
        $article_edit = $admin_model->getArticleBySlug($slug);
        $category = $admin_model->getCategory();

        if(null !== $admin_model->request('save')){
            $category_id = $admin_model->request('category_id');
            $title = $admin_model->request('title');
            $article_slug = $admin_model->makeTranslite($title);
            $full_text = $admin_model->request('full_text');
            $description = $admin_model->getDescription($full_text);
            $date_model = new DateTime;
            $date = $date_model->getTimestamp();
            $newValues = array(
                'category_id' => $category_id,
                'title' => $title,
                'description' => $description,
                'full_text' => $full_text,
                'updated_at' => $date,
                'article_slug' => $article_slug);

            if($admin_model->updateArticle($slug, $newValues)){
                $admin_model->redirect('/admin/news');
            }
        }

        echo $this->view->render('Admin/admin_news_view.html.twig', array('article_edit' => $article_edit, 'category' => $category));
    }

    public function article_delete_action($slug)
    {
        $admin_model = $this->loadModel('Admin');
        $admin_model->deleteArticle($slug);
        $admin_model->redirect('/admin/news');
    }

    public function category_action()
    {
        $admin_model = $this->loadModel('Admin');
        $category = $admin_model->getCategory();
        echo $this->view->render('Admin/admin_news_view.html.twig', array('category' => $category));
    }

    public function category_add_action()
    {
        $admin_model = $this->loadModel('Admin');
        $category = $admin_model->getCategory();

        if(null !== $admin_model->request('save')){
            $parent_id = $admin_model->request('parent_id');
            $category_name = $admin_model->request('category_name');
            $category_slug = $admin_model->makeTranslite($category_name);
            $values = array('parent_id' => $parent_id, 'category_name' => $category_name, 'category_slug' => $category_slug);

            if($admin_model->addCategory($values)){
                $admin_model->redirect('/admin/category');
            }
        }

        echo $this->view->render('Admin/admin_news_view.html.twig', array('category' => $category, 'category_add' => true));
    }

    public function category_edit_action($slug)
    {
        $admin_model = $this->loadModel('Admin');
        $category_info = $admin_model->getCategoryBySlug($slug);
        $category = $admin_model->getCategoryExceptSlug($slug);

        if(null !== $admin_model->request('save')){
            $id = $admin_model->request('id');
            $parent_id = $admin_model->request('parent_id');
            $category_name = $admin_model->request('category_name');
            $category_slug = $admin_model->makeTranslite($category_name);
            $newValues = array('parent_id' => $parent_id, 'category_name' => $category_name, 'category_slug' => $category_slug);
            if($admin_model->editCategoryById($id, $newValues)){
                $admin_model->redirect('/admin/category');
            }
        }

        echo $this->view->render('Admin/admin_news_view.html.twig', array('category_info' => $category_info, 'category' => $category, 'category_edit' => true));
    }

    public function category_delete_action($slug)
    {
        $admin_model = $this->loadModel('Admin');
        $admin_model->deleteCategory($slug);
        $admin_model->redirect('/admin/category');
    }
}