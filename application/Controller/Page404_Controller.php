<?php

class page404_Controller extends Controller
{

	function index_action()
	{
        echo $this->view->render('page404_view.php');
	}

}
