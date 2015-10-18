<?php

class News_Controller extends Controller
{
    function __construct()
    {
        $this->model = new News_Model();
        $this->content_view = 'news_view.php';
        parent::__construct();
    }

    function index_action()
    {
        $data = $this->model->getNews();
        $this->view->generate($this->content_view, $data);
    }

    function news_item_action()
    {
        $this->content_view = 'news_item_view.php';
        $data = $this->model->getNewsItem($this->model->request('id'));
        $this->view->generate($this->content_view, $data);
    }
}