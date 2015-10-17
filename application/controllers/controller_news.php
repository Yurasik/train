<?php

class Controller_News extends Controller
{
    function __construct()
    {
        $this->model = new Model_News();
        $this->content_view = 'news_view.php';
        parent::__construct();
    }

    function action_index()
    {
        $data = $this->model->getData();
        $this->view->generate($this->content_view, $data);
    }

    function action_news_item($id)
    {
        $this->content_view = 'news_item_view.php';
        $data = $this->model->getDataById($id);
        $this->view->generate($this->content_view, $data);
    }
}