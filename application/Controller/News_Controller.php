<?php

class News_Controller extends Controller
{
    function index_action()
    {
        $news_model = $this->loadModel('News');
        $data['news'] = $news_model->getNews();
        echo $this->view->render('News/news_view.html.twig', $data);
    }

    function article_action()
    {
        $news_model = $this->loadModel('News');
        $data['news'] = $news_model->getArticle($news_model->request('id'));
        echo $this->view->render('News/article_view.html.twig', $data);
    }
}