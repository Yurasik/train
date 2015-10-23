<?php

class Main_Controller extends Controller
{

    function index_action()
    {
        echo $this->view->render('main_view.php');
    }
}