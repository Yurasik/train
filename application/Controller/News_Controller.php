<?php

class News_Controller extends Controller
{
    function index_action()
    {
        $news_model = $this->loadModel('News');
        $data['category'] = $news_model->getCategory();
        $data['news'] = $news_model->getNews();
        echo $this->view->render('/News/news_view.html.twig', $data);
    }

    function article_action($id)
    {
        $news_model = $this->loadModel('News');
        $data['article'] = $news_model->getArticleById($id);
        echo $this->view->render('News/article_view.html.twig', $data);
    }

    function category_action($id)
    {
        $news_model = $this->loadModel('News');
        $data['category'] = $news_model->getCategory();
        $data['news'] = $news_model->getNewsByCategoryId($id);
        echo $this->view->render('/News/news_view.html.twig', $data);
    }
}