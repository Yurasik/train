<?php

class News_Controller extends Controller
{
    function index_action()
    {
        $news_model = $this->loadModel('News');
        $category = $news_model->getCategory();
        $news = $news_model->getNews();
        $title = 'Все новости';
        echo $this->view->render('/News/news_view.html.twig', array('category' => $category, 'news' => $news, 'title' => $title));
    }

    function article_action($slug)
    {
        $news_model = $this->loadModel('News');
        $article = $news_model->getArticleBySlug($slug);
        echo $this->view->render('News/article_view.html.twig', array('article' => $article));
    }

    function category_action($slug)
    {
        $news_model = $this->loadModel('News');
        $category = $news_model->getCategory();
        $categoryBySlug = $news_model->getCategoryBySlug($slug);
        $title = $categoryBySlug['category_name'];
        $news = $news_model->getNewsByCategoryId($categoryBySlug['id']);
        echo $this->view->render('/News/news_view.html.twig', array('category' => $category, 'title' => $title, 'news' => $news));
    }
}