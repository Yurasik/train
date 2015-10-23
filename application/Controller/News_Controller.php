<?php

class News_Controller extends Controller
{
    function __construct()
    {
        $this->model = new News_Model();
        parent::__construct();
    }

    function index_action()
    {
        $data['news'] = $this->model->getNews();
        echo $this->view->render('news_view.php', $data);
    }

    function news_item_action()
    {
        $data['news'] = $this->model->getNewsItem($this->model->request('id'));
        echo $this->view->render('news_item_view.php', $data);
    }
}