<?php

class Main_Controller extends Controller
{
    function index_action()
    {
        echo $this->view->render('Main/main_view.html.twig');
    }

    public function Error404_action()
    {
        echo $this->view->render('Main/error404_view.html.twig');
    }
}