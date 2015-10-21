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
        $data = $this->model->getNews();
        $this->view->generate('news_view.php', $data);
    }

    function news_item_action()
    {
        $data = $this->model->getNewsItem($this->model->request('id'));
        $this->view->generate('news_item_view.php', $data);
    }
}