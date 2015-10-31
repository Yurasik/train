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

    public function profile_action()
    {
        $data['title'] = 'Страница пользователя';
        echo $this->view->render('Users/profile_view.html.twig', $data);
    }

    public function submit_article_action()
    {
        $news_model = $this->loadModel('News');
        $data['title'] = 'Предложить новость';
        $data['category'] = $news_model->getCategory();

        if(null !== $news_model->request('save')){
            $title = $news_model->request('title');
            $full_text = $news_model->request('full_text');
            $description = $news_model->getDescription($full_text);
            $category_id = $news_model->request('category');
            $author_id = $news_model->getAuthorId($_SESSION['email']);
            $date = date('d-m-Y');
            $values = array(
                'category_id' => $category_id,
                'author_id' => $author_id['id'],
                'title' => $title,
                'description' => $description,
                'full_text' => $full_text,
                'date' => $date,
                'status' => 'moderation');

            $user_model = $this->loadModel('Users');

            if($user_model->addArticle($values)){
                $user_model->redirect('/news');
            }
        }

        $data['submit_news'] = true;
        echo $this->view->render('Users/profile_view.html.twig', $data);
    }
}